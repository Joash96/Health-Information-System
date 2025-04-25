<!doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CEMA | API Keys</title>

  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- inject:css-->
  <link rel="stylesheet" href="{{ asset('public/assets/vendor/css/bootstrap/bootstrap.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon.png') }}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
	
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>	
</head>

<body class="geex-dashboard">
	

	
	@include('includes.header')



    <main class="geex-main-content">
		

@include('includes.sidebar')
	
 
		
@include('includes.customizer')

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">CEMA</h2>
<p class="geex-content__header__subtitle">Empowering doctors to enroll and manage clients in healthcare programs with ease</p>

				</div>
				
@include('includes.haction')
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<button class="geex-btn geex-btn__toggle-task">
						<i class="uil-user"></i> Client Profile
					</button>
					<div class="geex-content__section geex-content__section--transparent geex-content__todo">
						<div class="geex-content__todo__sidebar">
							<div class="geex-content__todo__sidebar__label">
								<form method="POST" action="{{ route('generate.api.key') }}">
									@csrf
									<button class="geex-btn geex-btn--primary"><i class="uil-plus"></i>Generate New API Key</button>
								</form>
								
								<ul class="nav nav-tabs geex-content__todo__sidebar__tab mb-20" id="geex-todo-task-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="php-tab" data-bs-toggle="tab" href="#php-content" role="tab" aria-controls="php-content" aria-selected="true">My API Key</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="programs-tab" data-bs-toggle="tab" href="#programs-content" role="tab" aria-controls="programs-content" aria-selected="false">
											<i class="uil-file-alt"></i> PHP
										</a>
									</li>


									<li class="nav-item" role="presentation">
										<a class="nav-link" id="programs-tab2" data-bs-toggle="tab" href="#programs-content2" role="tab" aria-controls="programs-content2" aria-selected="false">
											<i class="uil-file-alt"></i> Python
										</a>
									</li>


									<li class="nav-item" role="presentation">
										<a class="nav-link" id="programs-tab3" data-bs-toggle="tab" href="#programs-content3" role="tab" aria-controls="programs-content3" aria-selected="false">
											<i class="uil-file-alt"></i> Node
										</a>
									</li>
									
								</ul>
							</div>
						</div>
						
						<div class="geex-content__todo__content tab-content" id="geex-todo-task-content">
							<div class="tab-pane fade show active" id="php-content" role="tabpanel" aria-labelledby="php-tab">
								<div class="geex-content__todo__header">
									<div class="geex-content__todo__header__title">
										<i class="uil-user"></i>
										<h4>API Keys</h4>
									</div>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade show active" id="todo_list_content" role="tabpanel" aria-labelledby="todo_list_tab">
										<div class="geex-content__todo__list">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__text">
												<p>
    You can use your API Key to securely access the client profile data. Ensure that you use a secure connection (HTTPS) when making requests.
</p>

													@isset($apiKey)
													<div class="alert alert-success mt-3">
														<strong>My API Key (copy & store it safely):</strong><br>
														<code>{{ $apiKey }}</code>
													</div>
													@endisset
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- Programs Tab -->
<div class="tab-pane fade" id="programs-content" role="tabpanel" aria-labelledby="programs-tab">
    <div class="geex-content__todo__header">
        <div class="geex-content__todo__header__title">
            <i class="uil-file-alt"></i>
            <h4>PHP Sample Code</h4>
        </div>
    </div>

    <div class="tab-content geex-transaction-content">
        <div class="geex-content__todo__list">
            <div class="geex-content__todo__list__single">
                <div class="geex-content__todo__list__single__text">
                    <pre>


// Define the API Key
$apiKey = 'your-api-key';
$clientId = 1; // Replace with the client ID you want to fetch

$url = "https://hospital.pulselinesolutions.co.ke/api/client/{$clientId}";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-API-KEY: ' . $apiKey // Send API key in X-API-KEY header
]);

// Execute the request and get the response
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "Response: " . $response;
}

// Close cURL session
curl_close($ch);


                    </pre>
                </div>
            </div>
        </div>
    </div>
</div>

						
							<!-- Programs Tab -->
<div class="tab-pane fade" id="programs-content2" role="tabpanel" aria-labelledby="programs-tab2">
    <div class="geex-content__todo__header">
        <div class="geex-content__todo__header__title">
           <i class="uil-file-alt"></i>
            <h4>Python Sample Code</h4>
        </div>
    </div>

    <div class="tab-content geex-transaction-content">
        <div class="geex-content__todo__list">
            <div class="geex-content__todo__list__single">
                <div class="geex-content__todo__list__single__text">
                    <pre>
import requests

apiKey = 'your-api-key'
clientId = 1  # The client ID to fetch
url = f'https://hospital.pulselinesolutions.co.ke/api/client/{clientId}'

headers = {
    'X-API-KEY': f'Bearer {apiKey}'
}

response = requests.get(url, headers=headers)

if response.status_code == 200:
    print(response.json())  # Output the data
else:
    print(f"Error: {response.status_code}")
</pre>

						
                </div>
            </div>
        </div>
    </div>
</div>



						
							<!-- Programs Tab -->
<div class="tab-pane fade" id="programs-content3" role="tabpanel" aria-labelledby="programs-tab3">
    <div class="geex-content__todo__header">
        <div class="geex-content__todo__header__title">
            <i class="uil-file-alt"></i>
            <h4>NodeJs Sample Code</h4>
        </div>
    </div>

    <div class="tab-content geex-transaction-content">
        <div class="geex-content__todo__list">
            <div class="geex-content__todo__list__single">
                <div class="geex-content__todo__list__single__text">
                   <pre>
const axios = require('axios');

const apiKey = 'your-api-key';
const clientId = 1;  // The client ID to fetch
const url = `https://hospital.pulselinesolutions.co.ke/api/client/${clientId}`;

axios.get(url, {
    headers: {
        'X-API-KEY': `Bearer ${apiKey}`
    }
})
.then(response => {
    console.log(response.data);  // Output the data
})
.catch(error => {
    console.error('Error:', error.response ? error.response.status : error.message);
});
</pre>

						
						
                </div>
            </div>
        </div>
    </div>
</div>
						</div>
						
						
					</div>
				</div>
			</div>
			
		</div>
	</main>

	<!-- inject:js-->
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/jquery/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
	<!-- endinject-->
</body>

</html>