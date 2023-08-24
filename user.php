<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col-12 col-md-6 offset-md-3 my-5 col-xl-8 offset-xl-2">
             <form method="post">
                 <div class="mb-3">
                     <label  class="form-label">Name</label>
                     <input autocomplete="off" type="text" class="form-control" name="name" placeholder="Enter your name">
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Email</label>
                     <input autocomplete="off" type="email" class="form-control" name="email" placeholder="Enter your email">
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Mobile</label>
                     <input autocomplete="off" type="text" class="form-control" name="mobile" placeholder="Enter your mobile number">
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Password</label>
                     <input autocomplete="off" type="text" class="form-control" name="password" placeholder="Enter your password">
                 </div>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             </form>
         </div>
     </div>
 </div>
</body>
</html>