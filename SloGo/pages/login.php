<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
	<div class="container h-100">
		<div class="blog-banner">
			<div class="text-center">
				<h1>Авторизация \ Регистрация</h1>
				<nav aria-label="breadcrumb" class="banner-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Авторизация \ Регистрация</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- ================ end banner area ================= -->

<!--================Login Box Area =================-->
<section class="login_box_area section-margin">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_box_img">
					<div class="hover">
						<h4>Впервые на нашем сайте?</h4>
						<p>зарегистрироваться можно тут: </p>
						<a class="button button-account" href="/reg">Завести аккаунт</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Авторизуйтесь, чтобы войти</h3>
					<form class="row login_form" onsubmit="sendForm(this); return false;">
						<div class="col-md-12 form-group">
							<input type="text" class="form-control" name="email" placeholder="E-mail" required />
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" name="pass" placeholder="Пароль" required />
						<p id="info" style="color: red"></p>
                  </div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="button button-login w-100">Авторизоваться</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Login Box Area =================-->
<script>
   async function sendForm(form) {
      let formData = new FormData(form);
      let responce = await fetch("authUser", {
         method: "POST",
         body: formData,
      });
      let res = await responce.json();
      if (res.result == "ok") {
         location.href = "/users/profile";
      }else if (res.result == "rejected") {
         info.innerTest = "Неправильный логин или пароль!";
         
      }else {
         alert("Неизвестная ошибка!");
      }
      //console.log(await responce.json());
   }
</script>

<?php require_once("footer.php") ?>