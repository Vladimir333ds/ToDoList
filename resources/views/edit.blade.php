<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
<body style="background-color: #9edbae">

    <div class="container w-25 mt-5">

        <div class="card shadow-sm">

            <div class="card-body">

                <form method="POST" action="{{ route('update', $todolists -> id) }}" >
                    
                    <!-- Buttons start -->

                    @csrf

                    <input type="hidden" name="id" value="{{ $todolists->id }}">

                    <input type="text" value="{{ $todolists -> content}}" class="form-control" name="content">

                    <button type="submit" class="btn btn-dark btn-sm px-4" onclick="edited()">Edit</button>

                    <a href="{{route('store')}}">Back</a>
                    
                    <!-- Buttons end -->

                </form>
            </div>
        </div>
    </div>
    <script src="countdown.js"></script>
</body>
</html>