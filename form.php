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

				<form action="" name="form-step-1">
					<div class="fieldgroup">
						<input type="text" name="firstName" id="firstName" />
						<label for="firstName">First name</label>
					</div>

					<div class="fieldgroup">
						<input type="text" name="lastName" id="lastName" />
						<label for="lastName">Last name</label>
					</div>

					<div class="fieldgroup">
						<input type="text" name="email" id="email" />
						<label for="email">Email</label>
					</div>

					<div class="fieldgroup">
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
					<br> please fill in the token below with the last 4 digits of your number</p>

					<form action="" name="form-step-2">
						<div class="fieldgroup">
							<input type="text" name="token" id="token" />
							<label for="token">Token</label>
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

						<form action="" name="form-step-3">
							<div class="fieldgroup">
								<input type="text" name="problem-type" id="problem-type" />
								<label for="problem-type">Type Of Problem</label>
							</div>
							<div class="fieldgroup">
								<input type="text" name="problem-location" id="problem-location" />
								<label for="problem-location">Location</label>
							</div>
							<div class="fieldgroup">
								<input type="text" name="problem-explain" id="problem-explain" />
								<label for="problem-explain">Explain Reporting</label>
							</div>
							<div class="fieldgroup">
								<input type="text" name="problem-solution" id="problem-solution" />
								<label for="problem-solution">Is There A Solution</label>
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

							<form action="" name="form-step-4">
								<div class="fieldgroup">
									<input type="text" name="agreen" id="agreen" />
									<label for="agreen">I agree</label>
								</div>

								<div class="buttons">
									<button type="button" class="btn btn-alt js-reset">Reset</button>
									
									<button type="submit" class="btn">Submit</button>
								</div>
								
							</form>

						</div>
					</div>
				</section>
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



				<script  src="js/index.js"></script>




			</body>

			</html>
