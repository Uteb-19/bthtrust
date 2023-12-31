<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
			@import url(
            "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
 
            body {
                height: 100vh;
                width: 100vw;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 30px;
                background-color: rgb(231, 231, 231);
            }
            
            header {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 8px;
            }
            
            .heading {
                color: green;
            }
                        
            .title {
                font-weight: 400;
                letter-spacing: 1.5px;
            }
            
            .container {
                height: 600px;
                width: 500px;
                background-color: white;
                box-shadow: 8px 8px 20px rgb(128, 128, 128);
                position: relative;
                overflow: hidden;
            }
 
            .btn {
                height: 60px;
                width: 300px;
                margin: 20px auto;
                box-shadow: 10px 10px 30px rgb(254, 215, 188);
                border-radius: 50px;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            
            .login,
            .signup {
                font-size: 22px;
                border: none;
                outline: none;
                background-color: transparent;
                position: relative;
                cursor: pointer;
            }
 
            .slider {
                height: 60px;
                width: 150px;
                border-radius: 50px;
                background-image: linear-gradient(to right,
                        rgb(255, 195, 110),
                        rgb(255, 146, 91));
                position: absolute;
                top: 20px;
                left: 100px;
                transition: all 0.5s ease-in-out;
            }
 
            .moveslider {
                left: 250px;
            }
            
            .form-section {
                height: 500px;
                width: 1000px;
                padding: 20px 0;
                display: flex;
                position: relative;
                transition: all 0.5s ease-in-out;
                left: 0px;
            }
 
            .form-section-move {
                left: -500px;
            }
            
            .login-box,
            .signup-box {
                height: 100%;
                width: 500px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0px 40px;
            }
            
            .login-box {
                gap: 50px;
            }
 
            .signup-box {
                gap: 30px;
            }
                        
            .ele {
                height: 60px;
                width: 400px;
                outline: none;
                border: none;
                color: rgb(77, 77, 77);
                background-color: rgb(240, 240, 240);
                border-radius: 50px;
                padding-left: 30px;
                font-size: 18px;
            }
 
            .clkbtn {
                height: 60px;
                width: 150px;
                border-radius: 50px;
                background-image: linear-gradient(to right,
                        rgb(255, 195, 110),
                        rgb(255, 146, 91));
                font-size: 22px;
                border: none;
                cursor: pointer;
            }
            
            /* For Responsiveness of the page */
            
            @media screen and (max-width: 650px) {
                .container {
                    height: 600px;
                    width: 300px;
                }
            
                .title {
                    font-size: 15px;
                }
            
                .btn {
                    height: 50px;
                    width: 200px;
                    margin: 20px auto;
                }
 
                .login,
                .signup {
                    font-size: 19px;
                }
            
                .slider {
                    height: 50px;
                    width: 100px;
                    left: 50px;
                }
            
                .moveslider {
                    left: 150px;
                }
            
                .form-section {
                    height: 500px;
                    width: 600px;
                }
            
                .form-section-move {
                    left: -300px;
                }
            
                .login-box,
                .signup-box {
                    height: 100%;
                    width: 300px;
                }
            
                .ele {
                    height: 50px;
                    width: 250px;
                    font-size: 15px;
                }
            
                .clkbtn {
                    height: 50px;
                    width: 130px;
                    font-size: 19px;
                }
            }
            
            @media screen and (max-width: 320px) {
                .container {
                    height: 600px;
                    width: 250px;
                }
            
                .heading {
                    font-size: 30px;
                }
            
                .title {
                    font-size: 10px;
                }
            
                .btn {
                    height: 50px;
                    width: 200px;
                    margin: 20px auto;
                }
            
                .login,
                .signup {
                    font-size: 19px;
                }
            
                .slider {
                    height: 50px;
                    width: 100px;
                    left: 27px;
                }
            
                .moveslider {
                    left: 127px;
                }
            
                .form-section {
                    height: 500px;
                    width: 500px;
                }
            
                .form-section-move {
                    left: -250px;
                }
            
                .login-box,
                .signup-box {
                    height: 100%;
                    width: 250px;
                }
            
                .ele {
                    height: 50px;
                    width: 220px;
                    font-size: 15px;
                }
            
                .clkbtn {
                    height: 50px;
                    width: 130px;
                    font-size: 19px;
                }
            }
        </style>
    </head>
    <body class="antialiased">     
			<div class="container">
				<div class="slider"></div>
				<div class="btn">
					<button class="login">Login</button>
					<button class="signup">Signup</button>
				</div>

				<div class="form-section">
					<div class="login-box">
						<input type="email" class="email ele" placeholder="youremail@email.com">
						<input type="password" class="password ele" placeholder="password">
						<button class="clkbtn">Login</button>
					</div>
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        <div class="signup-box">                    
                            @csrf
                                <input type="text" class="name ele" name="name" placeholder="Enter your name">
                                <input type="email" class="email ele" name="email" placeholder="youremail@email.com">
                                <input type="file" class="ele" name="image">
                                <input type="password" class="password ele" name="password" placeholder="password">
                                <button class="clkbtn" type="submit">Signup</button>
                            </div>
				        </div>
                    </form>				
				</div>
			</div>
		<script>
			let signup = document.querySelector(".signup");
			let login = document.querySelector(".login");
			let slider = document.querySelector(".slider");
			let formSection = document.querySelector(".form-section");
			
			signup.addEventListener("click", () => {
				slider.classList.add("moveslider");
				formSection.classList.add("form-section-move");
			});
			
			login.addEventListener("click", () => {
				slider.classList.remove("moveslider");
				formSection.classList.remove("form-section-move");
			});
		</script>
    </body>
</html>
