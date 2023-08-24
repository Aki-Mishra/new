<?php
// require "con.php";
session_start();
?>

<!-- 
<style>
<?php include './style.css'; ?>
</style> -->
<style>
  <?php include './edit.css'; ?>
</style>



<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- <link rel="stylesheet" href="edit.css" /> -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2500,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('', Swal.stopTimer)
        toast.addEventListener('', Swal.resumeTimer)
      }
    })

  </script>
</head>

<body>



  <!-- <div class="l-head">
      <h3>Welcome Back!</h3>
      <p>Login to continue</p>
    </div> -->
  <center id="from-background">
    <div class="container">

      <div class="i-phone">
        <div class="rectangle-1">
          <div class="form-content">
            <!-- <div class="r-container"> -->
            <!-- <div class="form"> -->
            <form action="" method="post">

              <!-- <span class="r-enter-span"> Email Address</span> -->
              <!-- <div class="r-form-input border"> -->
              <!-- <div class="r-input-icon">
                      <i class="bx bx-envelope"></i>
                    </div> -->
              <div class="input-userName">
                <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                  fill="none">
                  <path
                    d="M6.375 6.125C6.375 9.22625 8.89875 11.75 12 11.75C15.1012 11.75 17.625 9.22625 17.625 6.125C17.625 3.02375 15.1012 0.5 12 0.5C8.89875 0.5 6.375 3.02375 6.375 6.125ZM22 24.25H23.25V23C23.25 18.1763 19.3237 14.25 14.5 14.25H9.5C4.675 14.25 0.75 18.1763 0.75 23V24.25H22Z"
                    fill="#413B82" />
                </svg>
                <input type="email" name="email" class="r-input" placeholder="Enter Your Email" required>
              </div>
              <!-- </div> -->
              <!-- <span class="r-enter-span"> Password</span> -->
              <!-- <div class="r-form-input border"> -->
              <!-- <div class="r-input-icon"> -->
              <!-- <i class="bx bx-shield-quarter"></i> -->
              <!-- </div> -->
              <div class="input-password">
                <svg class="lock-icon" xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30"
                  fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20 7V12H23C23.7956 12 24.5587 12.3161 25.1213 12.8787C25.6839 13.4413 26 14.2044 26 15V27C26 27.7956 25.6839 28.5587 25.1213 29.1213C24.5587 29.6839 23.7956 30 23 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.316071 28.5587 0 27.7956 0 27V15C0 14.2044 0.316071 13.4413 0.87868 12.8787C1.44129 12.3161 2.20435 12 3 12H6V7C6 5.14348 6.7375 3.36301 8.05025 2.05025C9.36301 0.737498 11.1435 0 13 0C14.8565 0 16.637 0.737498 17.9497 2.05025C19.2625 3.36301 20 5.14348 20 7ZM8 7C8 5.67392 8.52678 4.40215 9.46447 3.46447C10.4021 2.52678 11.6739 2 13 2C14.3261 2 15.5979 2.52678 16.5355 3.46447C17.4732 4.40215 18 5.67392 18 7V12H8V7Z"
                    fill="#413B82" />
                </svg>
                <input type="password" name="password" class="r-input" placeholder="Enter Password" required>
              </div>
              <!-- </div> -->
              <div class="login-btn-box">
                <input  class="login-btn" type="submit" name="submit" value="Login In Now" class="r-submit">
                <svg class="lessThan-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20 30" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 26.7857L14.3478 15L0 3.21429L1.73913 0L20 15L1.73913 30L0 26.7857Z" fill="#413B82" />
                </svg>
              </div>


            </form>
            <p class="or-text">OR</p>
            <div class="ragister-btn-box">
            <!-- href="register.php" -->
            <a  href="#">
              <button class="ragister-btn l-submit">Register</button>
              <svg class="lessThan-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 20 30" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M0 26.7857L14.3478 15L0 3.21429L1.73913 0L20 15L1.73913 30L0 26.7857Z" fill="#413B82" />
                </svg>
            </a>
            </div>
            <!-- </div> -->
            <!-- </div> -->
          </div>
        </div>
        <div class="rectangle-2"></div>
        <div class="rectangle-3"></div>
        <div class="rectangle-4">
          <!-- <p class="login-text">login via</p>
          <div class="icons">
            <div class="insta">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                  d="M8 0C5.829 0 5.556 0.01 4.703 0.048C3.85 0.088 3.269 0.222 2.76 0.42C2.22609 0.620819 1.74249 0.935826 1.343 1.343C0.936076 1.7427 0.621107 2.22624 0.42 2.76C0.222 3.268 0.087 3.85 0.048 4.7C0.01 5.555 0 5.827 0 8.001C0 10.173 0.01 10.445 0.048 11.298C0.088 12.15 0.222 12.731 0.42 13.24C0.625 13.766 0.898 14.212 1.343 14.657C1.787 15.102 2.233 15.376 2.759 15.58C3.269 15.778 3.849 15.913 4.701 15.952C5.555 15.99 5.827 16 8 16C10.173 16 10.444 15.99 11.298 15.952C12.149 15.912 12.732 15.778 13.241 15.58C13.7746 15.3791 14.2578 15.0641 14.657 14.657C15.102 14.212 15.375 13.766 15.58 13.24C15.777 12.731 15.912 12.15 15.952 11.298C15.99 10.445 16 10.173 16 8C16 5.827 15.99 5.555 15.952 4.701C15.912 3.85 15.777 3.268 15.58 2.76C15.3789 2.22623 15.0639 1.74268 14.657 1.343C14.2576 0.935676 13.774 0.620645 13.24 0.42C12.73 0.222 12.148 0.087 11.297 0.048C10.443 0.01 10.172 0 7.998 0H8.001H8ZM7.283 1.442H8.001C10.137 1.442 10.39 1.449 11.233 1.488C12.013 1.523 12.437 1.654 12.719 1.763C13.092 1.908 13.359 2.082 13.639 2.362C13.919 2.642 14.092 2.908 14.237 3.282C14.347 3.563 14.477 3.987 14.512 4.767C14.551 5.61 14.559 5.863 14.559 7.998C14.559 10.133 14.551 10.387 14.512 11.23C14.477 12.01 14.346 12.433 14.237 12.715C14.1087 13.0624 13.904 13.3764 13.638 13.634C13.358 13.914 13.092 14.087 12.718 14.232C12.438 14.342 12.014 14.472 11.233 14.508C10.39 14.546 10.137 14.555 8.001 14.555C5.865 14.555 5.611 14.546 4.768 14.508C3.988 14.472 3.565 14.342 3.283 14.232C2.9355 14.1039 2.62113 13.8996 2.363 13.634C2.09675 13.376 1.89172 13.0617 1.763 12.714C1.654 12.433 1.523 12.009 1.488 11.229C1.45 10.386 1.442 10.133 1.442 7.996C1.442 5.86 1.45 5.608 1.488 4.765C1.524 3.985 1.654 3.561 1.764 3.279C1.909 2.906 2.083 2.639 2.363 2.359C2.643 2.079 2.909 1.906 3.283 1.761C3.565 1.651 3.988 1.521 4.768 1.485C5.506 1.451 5.792 1.441 7.283 1.44V1.442ZM12.271 2.77C12.1449 2.77 12.0201 2.79483 11.9036 2.84308C11.7872 2.89132 11.6813 2.96203 11.5922 3.05118C11.503 3.14032 11.4323 3.24615 11.3841 3.36262C11.3358 3.4791 11.311 3.60393 11.311 3.73C11.311 3.85607 11.3358 3.9809 11.3841 4.09738C11.4323 4.21385 11.503 4.31968 11.5922 4.40882C11.6813 4.49797 11.7872 4.56868 11.9036 4.61692C12.0201 4.66517 12.1449 4.69 12.271 4.69C12.5256 4.69 12.7698 4.58886 12.9498 4.40882C13.1299 4.22879 13.231 3.98461 13.231 3.73C13.231 3.47539 13.1299 3.23121 12.9498 3.05118C12.7698 2.87114 12.5256 2.77 12.271 2.77ZM8.001 3.892C7.45607 3.8835 6.91489 3.98349 6.40898 4.18614C5.90306 4.3888 5.44251 4.69007 5.05415 5.07242C4.66579 5.45478 4.35736 5.91057 4.14684 6.41326C3.93632 6.91595 3.8279 7.4555 3.8279 8.0005C3.8279 8.5455 3.93632 9.08505 4.14684 9.58774C4.35736 10.0904 4.66579 10.5462 5.05415 10.9286C5.44251 11.3109 5.90306 11.6122 6.40898 11.8149C6.91489 12.0175 7.45607 12.1175 8.001 12.109C9.07954 12.0922 10.1082 11.6519 10.865 10.8833C11.6217 10.1146 12.0459 9.07917 12.0459 8.0005C12.0459 6.92183 11.6217 5.88641 10.865 5.11775C10.1082 4.34909 9.07954 3.90883 8.001 3.892ZM8.001 5.333C8.70833 5.333 9.38669 5.61399 9.88685 6.11415C10.387 6.61431 10.668 7.29267 10.668 8C10.668 8.70733 10.387 9.38569 9.88685 9.88585C9.38669 10.386 8.70833 10.667 8.001 10.667C7.29367 10.667 6.61531 10.386 6.11515 9.88585C5.61499 9.38569 5.334 8.70733 5.334 8C5.334 7.29267 5.61499 6.61431 6.11515 6.11415C6.61531 5.61399 7.29367 5.333 8.001 5.333Z"
                  fill="white" />
              </svg>
            </div>
            <div class="fb">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M15.1168 0H0.8832C0.3952 0 0 0.3952 0 0.8832V15.1168C0 15.6048 0.3952 16 0.8832 16H8.5456V9.804H6.4608V7.3896H8.5456V5.608C8.5456 3.5408 9.808 2.416 11.652 2.416C12.5352 2.416 13.2936 2.4816 13.5152 2.5112V4.6712H12.2368C11.2336 4.6712 11.04 5.148 11.04 5.8472V7.3888H13.4312L13.1192 9.8032H11.0392V16H15.1168C15.6048 16 16 15.6048 16 15.1168V0.8832C16 0.3952 15.6048 0 15.1168 0Z"
                  fill="#FFF7F7" />
              </svg>
            </div>
            <div class="twitter">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
                <path
                  d="M6.2825 17C13.83 17 17.9587 10.458 17.9587 4.79465C17.9587 4.61158 17.9587 4.4259 17.9513 4.24283C18.7551 3.63412 19.4488 2.88049 20 2.01726C19.2491 2.36358 18.4535 2.59184 17.6388 2.69461C18.4969 2.15801 19.1397 1.31372 19.4475 0.318659C18.6412 0.818333 17.7588 1.1691 16.8387 1.3556C16.2202 0.666517 15.4018 0.210018 14.5101 0.056817C13.6185 -0.0963843 12.7034 0.0622619 11.9067 0.508182C11.1099 0.954102 10.476 1.66241 10.1031 2.52339C9.73012 3.38437 9.63897 4.34997 9.84375 5.27063C8.21218 5.18504 6.61602 4.74165 5.1588 3.9692C3.70159 3.19676 2.41586 2.11251 1.385 0.786788C0.861675 1.73231 0.701967 2.85074 0.938308 3.91497C1.17465 4.9792 1.78932 5.90944 2.6575 6.51679C2.00692 6.49367 1.37065 6.31092 0.8 5.98328V6.04212C0.801122 7.03262 1.12913 7.99234 1.72859 8.75905C2.32805 9.52576 3.16218 10.0524 4.09 10.2501C3.73783 10.3515 3.37404 10.4021 3.00875 10.4004C2.75123 10.4012 2.49423 10.3763 2.24125 10.3259C2.50348 11.1785 3.01409 11.924 3.70156 12.4579C4.38903 12.9919 5.21892 13.2875 6.075 13.3034C4.62069 14.4983 2.82425 15.1463 0.975 15.1432C0.649151 15.1446 0.323529 15.125 0 15.0843C1.87689 16.3361 4.05662 17.0007 6.2825 17Z"
                  fill="white" />
              </svg>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </center>
  <?php
  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM usertable WHERE email = '$email' and password = '$password'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {

      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      echo "<script> 
      Toast.fire({
  icon: 'success',
  title:' Login Success'
})
      </script>";
      echo "<meta http-equiv='refresh' content='1.5 url=index.php'>";

    } else {
      echo "<script> 
      Toast.fire({
  icon: 'error',
  title:'Invalid Email Or Password'
})
      </script>";
    }
  }

  ?>
</body>

</html>