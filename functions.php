//Login page
function custom_login_page_background() {
    // Define the primary color and other customizable styles here
    $primary_color = '#04bcfc';
    $form_background_color = '#ffffff';
    $text_color = '#000';
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo $primary_color; ?>;
            --form-bg-color: <?php echo $form_background_color; ?>;
            --text-color: <?php echo $text_color; ?>;
        }

        body.login {
            background-color: var(--primary-color); 
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
        }

        .login form {
            background: var(--form-bg-color); 
            border: none !important; 
            border-radius: 8px; 
            box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
            padding: 20px;
        }

        .login .message, .login .notice, .login .success {
            border-left: none !important;
            background-color: var(--form-bg-color);
            box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
            border-radius: 8px;
            text-align: center;
        }

        #nav {
            text-align: center;
        }

        #nav a {
            color: var(--text-color) !important;
        }

        #loginform p.submit, .login-action-lostpassword p.submit {
            border: none !important;
            margin-top: 40px !important;
        }

        p.submit {
            text-align: center;
        }

        .wp-core-ui .button-primary {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            width: 100%;
            font-size: 16px !important;
        }

        .wp-core-ui .button-primary:hover {
            background: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }

        .wp-core-ui .button-primary:focus {
            outline: none !important;
        }
		
	#backtoblog {
		text-align: center;
	}
	#backtoblog a {
    		color: var(--text-color) !important;
	}
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_page_background');
