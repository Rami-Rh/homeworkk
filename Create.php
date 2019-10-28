<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>STUDENTS</h1>
    <fieldset>       
        <form action="store.php" method="POST">
            
             <div class="form-group">
              <label for ="firstname"> firstname</label>
              <input type="text" name="firstname"   class="form-control">
            </div>
              <div class="form-group">
                <label for ="lastname"> lastname</label>
                <input type="text" name="lastname"   class="form-control" >
              </div>
                <div class="form-group">
                <label for ="email">E-mail</label>
                <input type="text" name="email"   class="form-control">
              </div>
                <div class="form-group">
                  <label for ="phone">phone</label>
                  <input type="text" name="phone"   class="form-control">
               </div>
                <button type="submit" >
                enregistre
                </button>
                <button type="reset" >
                    <a href="index.php" class="btn btn-outline-success">annuler</a>
                </button>
        </form>
    </fieldset>
    </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>