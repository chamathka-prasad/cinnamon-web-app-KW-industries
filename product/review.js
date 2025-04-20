document.querySelectorAll('.stars a').forEach(star => {
    star.addEventListener('click', function (e) {
      e.preventDefault();

      const rating = parseInt(this.className.split('-')[1]);

      // Remove all selected classes
      document.querySelectorAll('.stars a').forEach(s => s.classList.remove('selected'));

      // Add selected class to clicked and previous stars
      for (let i = 1; i <= rating; i++) {
        document.querySelector('.star-' + i).classList.add('selected');
      }

      // Store rating in hidden input
      document.getElementById('selected-rating').value = rating;
    });
  });

  // Submit review and show stars
  document.getElementById('commentform').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('author').value;
    const email = document.getElementById('email66').value;
    const comment = document.getElementById('comment').value;
    const rating = document.getElementById('selected-rating').value;

    if (!rating) {
      alert('Please select a rating!');
      return;
    }

    const reviewBox = document.createElement('div');
    reviewBox.style.marginBottom = '25px';

    // Add visual stars
    let starIcons = '';
    for (let i = 1; i <= 5; i++) {
      starIcons += `<i class="fa fa-star" style="color: ${i <= rating ? 'gold' : '#ccc'};"></i>`;
    }

    reviewBox.innerHTML = `
      <strong>${name}</strong><br/>
      <div style="margin: 5px 0;">${starIcons}</div>
      <p style="text-align: justify;">${comment}</p>
      <hr/>
    `;

    document.getElementById('reviews-container').prepend(reviewBox);
    this.reset();

    // Reset star selections
    document.querySelectorAll('.stars a').forEach(star => star.classList.remove('selected'));
    document.getElementById('selected-rating').value = '';
  });