<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Input form with progress bar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


	<link rel="stylesheet" href="css/style.css">


</head>

<body>

	<section class="section">
		<h1>Laporkan Masalah Yang Ada Di Sekolah</h1>

		<div class="form-progress">
			<progress class="form-progress-bar" min="0" max="100" value="0" step="33" aria-labelledby="form-progress-completion"></progress>

			<div class="form-progress-indicator one active"></div>
			<div class="form-progress-indicator two"></div>
			<div class="form-progress-indicator three"></div>
			<div class="form-progress-indicator four"></div>

			<p id="form-progress-completion" class="js-form-progress-completion sr-only" aria-live="polite">0% complete</p>
		</div>


		<div class="animation-container">
			<!-- Step one -->
			<div class="form-step js-form-step" data-step="1">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong><br>
				Please fill out the fields below so we can learn some information about you. </p>

				<form action="simpan_data.php" method="POST" name="form-step-1">
					<input type="hidden" name="data_pelapor" value="1">
					<div class="fieldgroup">
						<input type="text" name="namereporter" id="namereporter" required />
						<label for="namereporter">Name</label>
					</div>

					<div class="fieldgroup">
						<select name="status" id="status" onchange="myFunction(this.value)">
							<option value="guest">Guest</option>
							<option value="siswa">Siswa</option>
						</select>
						<!-- <input type="text" name="status" id="status" onchange="myFunction(this.value)" /> -->
						<!-- <label for="status">status nanti di buat dropdown kelas/guest</label> -->
					</div>

					<div id="fieldgroup-nis" class="fieldgroup" style="display: none;">
						<input type="text" name="Nis" id="Nis" />
						<label for="Nis">Nis Number</label>
					</div>

					<div class="buttons">
						<button type="button" class="btn btn-alt js-reset">Reset</button>

						<button type="submit" class="btn">Continue</button>
					</div>
				</form>

			</div>

			<!-- Step two -->
			<div class="form-step js-form-step waiting hidden" data-step="2">

				<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
					<br> please verify the captcha </p>

					<form action="simpan_data.html" method="POST" name="form-step-2">
						<div class="captcha">
							<div class="spinner">
								<label>
									<input type="checkbox" onclick="$(this).attr('disabled','disabled');">
									<span class="checkmark"><span>&nbsp;</span></span>
								</label>
							</div>
							<div class="textarobot">
								I'm not a robot
							</div>
							<div class="logo">
								<img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/"/>
								<p>reCAPTCHA</p>
								<small>Privacy - Terms</small>
							</div>
						</div>

						<div class="buttons">
							<button type="button" class="btn btn-alt js-reset">Reset</button>

							<button type="submit" class="btn">Continue</button>
						</div>
					</form>

				</div>



				<!-- Step three -->
				<div class="form-step js-form-step waiting hidden" data-step="3">

					<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
						<br>Please tell us what information you will report. in full we will keep this secret.</p>

						<form action="simpan_data.html" method="POST" name="form-step-3">
							<div class="fieldgroup">
								<select name="problem-type" id="problem-type">
									<option value="saran">Saran</option>
									<option value="kritik">Kritik</option>
									<option value="laporan">Laporan</option>
									<option value="pengaduan">Pengaduan</option>
								</select>
								<!-- <input type="text" name="problem-type" id="problem-type" />
								<label for="problem-type">Type Of Problem di buat dropdown </label> -->
							</div>
							<div class="fieldgroup">
								<input type="text" name="problem-location" id="problem-location" />
								<label for="problem-location">Location</label>
							</div>
							<div class="fieldgroup">
								<textarea cols="40" rows="5" name="problem-explain" id="problem-explain" placeholder="Explain Reporting" style="padding: 5px 10px;"></textarea>
							</div>
							<div class="fieldgroup">
								<textarea cols="40" rows="5" name="problem-solution" id="problem-solution" placeholder="Is There A Solution" style="padding: 5px 10px;"></textarea>
							</div>
							<div class="buttons">
								<button type="button" class="btn btn-alt js-reset">Reset</button>

								<button type="submit" class="btn">Continue</button>
							</div>
						</form>

					</div>



					<!-- Step four -->
					<div class="form-step js-form-step waiting hidden" data-step="4">

						<p class="form-instructions"><strong>Click the continue button to show form progression.</strong>
							<br> Finally, please write the word "I Agree" in the field below to agree that we used the previous data that you entered for proof of the reporting you reported</p>

							<form action="simpan_data.html" method="POST" name="form-step-4">
								<div class="fieldgroup">
									<input type="text" name="agreen" id="agreen" onchange="btn_disabled(this.value)" />
									<label for="agreen">I agree</label>
								</div>

								<div class="buttons">
									<button type="button" class="btn btn-alt js-reset">Reset</button>
									<button id="btn-sumbit-laporan" type="submit" class="btn" disabled>Submit</button>
								</div>
								
							</form>

						</div>
					</div>
				</section>
				<form action="simpan_data.php" method="POST">
					<input type="text" name="jajal">
					<button type="submit">Submit</button>
				</form>
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



				<script  src="js/index.js"></script>
				<script type="text/javascript" src="js/jquery.min.js"></script>
				<script type="text/javascript">
					function myFunction(val) {
  						// alert("The input value has changed. The new value is: " + val);
  						if (val == 'siswa') {
  							// alert("The input value has changed. The new value is: " + val);
  							$("#fieldgroup-nis").show();
  						}
  						else{
  							// alert("The input value has changed. The new value is: mbuh apa");
  							$("#fieldgroup-nis").hide();
  						}
					}

					function btn_disabled(val) {
  						// alert("The input value has changed. The new value is: " + val);
  						if (val == 'I Agree') {
  							alert("The input value has changed. The new value is: " + val);
  							$("#btn-sumbit-laporan").removeAttr('disabled');
  						}
  						else{
  							// alert("The input value has changed. The new value is: mbuh apa");
  							$("#btn-sumbit-laporan").attr("disabled", "disabled");
  						}
					}
				</script>




			</body>

			</html>
