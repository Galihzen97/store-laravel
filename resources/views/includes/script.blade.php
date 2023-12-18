    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/script/navbar-scroll.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      function toggleForm() {
          var searchForm = document.getElementById('searchForm');
          var searchButton = document.querySelector('.button-search');
          if (searchForm.style.display === 'none') {
              searchForm.style.display = 'inline-block';
              searchButton.style.display = 'none';
          } else {
              searchForm.style.display = 'none';
              searchButton.style.display = 'inline-block';
          }
      }
  </script>
  <script>
    document.getElementById('searchInput').addEventListener('keypress', function(event) {
        // Jika tombol yang ditekan adalah Enter (kode 13)
        if (event.key === 'Enter') {
            // Mengirim formulir
            document.getElementById('searchForm').submit();
            event.preventDefault(); // Mencegah tindakan default pengiriman formulir
        }
    });
</script>
