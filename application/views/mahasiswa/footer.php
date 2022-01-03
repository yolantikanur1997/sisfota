<!--      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
  </div>

    <!--   Core JS Files   -->
  <script src="<?=base_url('assets/js/core/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/js/core/popper.min.js')?>"></script>
  <script src="<?=base_url('assets/js/core/bootstrap.min')?>.js"></script>
  <script src="<?=base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <script src="<?=base_url('assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript')?>"></script>
   <script src="<?=base_url('assets/js/datatables.min.js')?>"></script>
<script>
  

  $(document).ready( function () {
    $('#tabel').DataTable();
} );
</script>
<script>
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html
      (fileName);
    });
  </script>