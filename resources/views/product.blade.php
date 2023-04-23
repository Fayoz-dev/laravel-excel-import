<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
       
    </head>

    <body>


    <div class="wrapper">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"><div class="card p-3">
                    <form action="{{route("product.route")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-1">
                            <label for="file">Faylni yuklang</label>
                            <input type="file" name="file" class="form-control mt-1" accept=".xlsx">
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-success">Yuborish</button>
                        </div>
                    </form>
                </div></div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    </body>


     </html>
