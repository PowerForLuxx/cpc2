<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!DOCTYPE html>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="main" href="/">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="booklist" href="/booklist">Book List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="userlist" href="/userlist">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="reg" href="/reg">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="login" href="/log">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
<html>
<head>
    <title>Library</title>
<h1>{{$main}}</h1>
</head>
</html>
