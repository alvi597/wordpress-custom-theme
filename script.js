// Simple tag highlight on click
document.querySelectorAll('.tag').forEach(tag => {
  tag.addEventListener('click', function() {
    document.querySelectorAll('.tag').forEach(t => t.classList.remove('active'));
    this.classList.add('active');
  });
}); 