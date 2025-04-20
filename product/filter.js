document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector('.woocommerce-product-search');
  const orderSelect = document.querySelector('.orderby');
  const productContainer = document.querySelector('.products');
  const qualityFilter = document.getElementById('quality-filter');
  const filterButton = document.getElementById('filter-button');

  if (!form || !orderSelect || !productContainer || !qualityFilter || !filterButton) return;

  let originalProducts = Array.from(productContainer.querySelectorAll('.product'));

  const getProductTitle = (product) =>
    product.querySelector('h2')?.textContent.trim().toLowerCase() || "";

  const getProductDiameter = (product) => {
    const desc = product.querySelector('.product-description-short p')?.textContent || "";
    const match = desc.match(/Diameter:\s*(\d+\.?\d*)/i);
    return match ? parseFloat(match[1]) : 0;
  };

  const getProductQuality = (product) => {
    const desc = product.querySelector('.product-description-short p')?.textContent.toLowerCase() || "";
    return desc;
  };

  const showAllProducts = () => {
    const noResults = document.querySelector('.no-results');
    if (noResults) noResults.remove();

    const products = productContainer.querySelectorAll('.product');
    products.forEach(product => {
      product.style.display = 'block';
    });
  };

  const renderProducts = (products) => {
    productContainer.innerHTML = "";
    products.forEach(product => productContainer.appendChild(product));
  };

  const sortProducts = (order) => {
    let products = Array.from(productContainer.querySelectorAll('.product'));

    if (order === "default") {
      renderProducts(originalProducts);
      showAllProducts();
      return;
    }

    if (order === "name-asc" || order === "name-desc") {
      products.sort((a, b) => {
        const nameA = getProductTitle(a);
        const nameB = getProductTitle(b);
        return order === "name-asc" ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
      });
    } else if (order === "diameter-asc" || order === "diameter-desc") {
      products.sort((a, b) => {
        const dA = getProductDiameter(a);
        const dB = getProductDiameter(b);
        return order === "diameter-asc" ? dA - dB : dB - dA;
      });
    }

    renderProducts(products);
    showAllProducts();
  };

  // 🔍 Search
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const keyword = document.querySelector('.woocommerce-product-search .search-field').value.toLowerCase();
    const products = productContainer.querySelectorAll('.product');
    let hasMatch = false;

    products.forEach(product => {
      const name = getProductTitle(product);
      if (name.includes(keyword)) {
        product.style.display = 'block';
        hasMatch = true;
      } else {
        product.style.display = 'none';
      }
    });

    const existingMessage = document.querySelector('.no-results');
    if (!hasMatch) {
      if (!existingMessage) {
        const noResults = document.createElement('p');
        noResults.className = 'no-results';
        noResults.textContent = 'No products found.';
        productContainer.appendChild(noResults);
      }
    } else if (existingMessage) {
      existingMessage.remove();
    }
  });

  // ⬇️ Sorting
  orderSelect.addEventListener('change', function () {
    const selected = this.value;
    sortProducts(selected);
  });

  // 🏷️ Quality filter
  filterButton.addEventListener('click', function () {
    const selectedQuality = qualityFilter.value.toLowerCase();
    const products = productContainer.querySelectorAll('.product');
    let hasMatch = false;

    products.forEach(product => {
      const quality = getProductQuality(product);

      const matches = selectedQuality === 'all' || quality.includes(selectedQuality);

      product.style.display = matches ? 'block' : 'none';
      if (matches) hasMatch = true;
    });

    const existingMessage = document.querySelector('.no-results');
    if (!hasMatch) {
      if (!existingMessage) {
        const noResults = document.createElement('p');
        noResults.className = 'no-results';
        noResults.textContent = 'No products found with selected quality.';
        productContainer.appendChild(noResults);
      }
    } else if (existingMessage) {
      existingMessage.remove();
    }
  });
});
