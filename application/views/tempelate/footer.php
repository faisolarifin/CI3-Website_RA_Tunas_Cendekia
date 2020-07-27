<section class="kontak wow fadeInLeft">
	<div class="container-fluid">
		<div class="row mt-3">
			<div class="col-lg-4">
				<h6 class="font-weight-bold">Alamat:</h6>
				<p class="font-weight-light">Jalan Oscar Raya, Komplek Bumi Pamulang Asri Keluarahan Bambu Apus, Pamulang, Tangerang Selatan, Banten. </p>
			</div>
			<div class="col-lg-2 py-4">
				<i class="fa fa-twitter"></i><span>@tunascendekia</span>
			</div>
			<div class="col-lg-2 py-4">
				<i class="fa fa-facebook"></i><span>Tunas Cendekia</span>
			</div>
			<div class="col-lg-2 py-4">
				<i class="fa fa-instagram"></i><span>@tunascendekia</span>
			</div>
			<div class="col-lg-2 py-4">
				<i class="fa fa-whatsapp"></i><span>+6285711754090</span>
			</div>
		</div>
	</div>
</section>

<footer id="footer wow fadeInUp">
	<div class="container-fluid text-white bg-dark">
		<div class="row text-center py-3">
			<div class="col">Copyright &copy; <?= date('Y'); ?> tunascendikia.com - All Right Reserved. </div>
		</div>
	</div>
</footer>

<div class="modal fade md-pencarian" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pencarian</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="get" action="<?= base_url(); ?>search">
				<div class="modal-body">
					<div class="input-group mb-3">
						<input type="text" name="keyword" class="form-control" id="keyword" placeholder="Apa yang anda cari ?">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.2.1/jquery.carouFredSel.packed.js"></script>

<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!--wow.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="<?= base_url(); ?>assets/js/script.js"></script>
<script>
	new WOW().init();
</script>

</body>
</html>
