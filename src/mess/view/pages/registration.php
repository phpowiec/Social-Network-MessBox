<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MessBox</title>
    <meta name="author" content="Mateusz Wojno">
    <meta name="description" content="Informacje o f1 "/>
    <meta name="keywords" content="f1, wyścig, zwycięstwo"/>
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/starting.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<nav class="navbar  navbar-expand-md" id="menu">
    <button class="navbar-toggler btn btn-outline-light" type="button" data-toggle="collapse" data-target="#mainmenu"
            aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto col-xl-7 bg-f2 d-flex justify-content-between">
            <li class="nav-item bg-mat">
                <a class="nav-link" href="index.php">Startowa</a>
            </li>
            <li class="nav-item bg-mat">
                <a class="nav-link" href="logging.php">Logowanie</a>
            </li>
            <li class="nav-item bg-mat">
                <a class="nav-link" href="registration.php">Rejestracja</a>
            </li>
        </ul>
    </div>
</nav>

<div class=" col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 mx-auto bg-white" id="registration">
    <div class="row">
        <div class="d-flex justify-content-center mb-3 pb-3 pt-3" id="registrationHeader">
            <h1>Rejestracja</h1>
        </div>
    </div>
    <?php if ($this->registration->successful()): ?>
    <div class="success">
        <?= htmlentities($this->registration->successMessage()); ?>
    </div>
    <?php endif; ?>
    <form action="registration.php" method="post">
        <div class="row d-flex">
            <div class="form-group col-xl-12 text-light">
                <input name="login" class="form-control border border-dark" placeholder="Login...">
                <?php if ($this->validation->failed("login")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("login")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input type="password" name="password" class="form-control border border-dark" placeholder="Hasło...">
                <?php if ($this->validation->failed("password")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("password")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input type="password"
                       name="passwordRepeat"
                       class="form-control border border-dark"
                       placeholder="Powtórz hasło...">
                <?php if ($this->validation->failed("passwordRepeat")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("passwordRepeat")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input name="firstName" class="form-control border border-dark" placeholder="Imię...">
                <?php if ($this->validation->failed("firstName")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("firstName")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input name="lastName" class="form-control border border-dark" placeholder="Nazwisko...">
                <?php if ($this->validation->failed("lastName")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("lastName")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input name="email" class="form-control border border-dark" placeholder="Email...">
                <?php if ($this->validation->failed("email")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("email")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12">
                <input name="phoneNumber" class="form-control border border-dark" placeholder="Telefon...">
                <?php if ($this->validation->failed("phoneNumber")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("phoneNumber")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <input type="date" name="birthDate" class="form-control border border-dark">
                <?php if ($this->validation->failed("birthDate")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("birthDate")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <select class="browser-default custom-select border border-dark" name="gender">
                    <option value="">Wybierz płeć</option>
                    <option value="Mężczyzna">Mężczyzna</option>
                    <option value="Kobieta">Kobieta</option>
                </select>
                <?php if ($this->validation->failed("gender")): ?>
                    <span class="error">
                        <?= htmlSpecialChars($this->validation->message("gender")); ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-12 text-light">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" name="avatar">
                    <label class="custom-file-label border border-dark" for="customFileLang">
                        Wybierz awatar
                    </label>
                    <?php if ($this->validation->failed("avatar")): ?>
                        <span class="error">
                            <?= htmlSpecialChars($this->validation->message("avatar")); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <button type="submit" name="signUp" class="btn btn-danger mb-3">Zarejestruj</button>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js./bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

</body>
</html>