<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="utf-8">

        <title>Todo List</title>

        <!-- Bootstrap css -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    </head>
    
    <body style="background-color: #9edbae">

        <div class="container w-25 mt-5">

            <div class="card shadow-sm">

                <div class="card-body">

                <h3>ToDo list</h3>

                    <form action="{{ route('store') }}" method="POST" autocomplete="off">
                        @csrf
                        
                        <div class="input-group">

                            <input type="text" name="content" class="form-control" placeholder="What are your plans?">                        
                        
                        </div>

                        <div class="input-group d-flex flex-column">

                            <span>At what time it should be done?</span>

                            <!-- The time value is passed to js but resets after 1 second, so fixed value was assigned to test if it works -->
                        
                            <input type="time" id="timeComplete" value="19:51">

                        </div>

                        <div class="text-center mt-2">

                            <button type="submit" class="btn btn-dark btn-sm px-4 w-50" id="time">
                                +
                            </button>

                        </div>          

                    </form>

                    <!-- Task list output start-->

                    @if(count($todolists))

                        <ul class="list-group list-group-flush mt-3">

                            @foreach($todolists as $todolist)

                                <li class="list-group-item">

                                    <div class="d-flex flex-row">    

                                        <!-- Buttons start-->

                                        <form action="{{ route('destroy', $todolist -> id) }}" method="POST">

                                                {{ $todolist -> content }}
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-link btn-sm float-end">

                                                    Delete

                                                </button>

                                            </form>

                                            <form action="{{ route('edit', $todolist -> id ) }}">

                                                <button class="btn btn-link btn-sm float-end">

                                                    Edit

                                                </button>

                                            </form>

                                            <form action="{{ route('destroy', $todolist -> id) }}" method="POST">

                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-link btn-sm float-end">

                                                    Done

                                                </button>

                                            </form>

                                        <!-- Buttons end-->

                                    </div>

                                    <!-- Timer input start -->
                                    
                                            <br>

                                            <p id="countDownTimer{{$todolist -> id}}"></p>

                                            <input type="hidden" id="dynId" value="countDownTimer{{$todolist -> id}}">
                                    
                                    <!-- Timer input end -->

                                </li>
                                
                            @endforeach()

                        </ul>

                        @else

                        <p class="text-center mt-3">No tasks pending!</p>

                    @endif()

                    <!-- Task list output end-->

                </div>

                @if(count($todolists))

                    <div class="card-footer">

                        You have {{ count($todolists) }} pending tasks!

                    </div>

                @else

                    <!-- Display nothing if no tasks active -->

                @endif

            </div>

        </div>

        <script type="text/javascript" src="countdown.js"></script>

    </body>
</html>