<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
    <body>
    <div class="container">
        <h2>HTML FORM</h2>
        <div class="form">
            <form action="{{route('Tution.form.submit')}}" method="POST">
            @csrf
                <div class="form-group col-md-4">
                    <lable for="full_name">Full Name :</lable><br>
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="full_name"><br>
                    <lable for="email">Email :</lable><br>
                    <input type="text" name="email" id="email" class="email" placeholder="email"><br>
                </div>
                <button type="submit" class="btn-btn-primary">Submit</button>
            </form>
        </div>    
    </div>
    </body>
</html>