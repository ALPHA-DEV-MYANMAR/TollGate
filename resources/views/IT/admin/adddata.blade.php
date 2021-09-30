@extends('layouts.master')


@section('title','adddata')

@section('content')

@section('action')

<form action="{{ url('/add') }}" method="POST">
@csrf
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="padding: 20px">
                <h5 class="text-center" >  <i><b>Add Data</b></i> </h5>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                {{-- Date --}}
                                <div class="div">
                                    <select class=" form-control-sm" name="year">
                                        <option>Year</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                    </select>
                                        <select class=" form-control-sm" name="month">
                                        <option>Month</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                    <select class=" form-control-sm" name="day">
                                        <option>Day</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>
                                </div>
                                {{-- Class --}}
                                <div class="div" style="margin-top: 20px">
                                    <select class="form-control" name="class" id="tc">
                                        <option>Choose Vehicle Class</option>
                                        <option>CLASS-1</option>
                                        <option>CLASS-2</option>
                                        <option>CLASS-3</option>
                                        <option>CLASS-4</option>
                                        <option>CLASS-5</option>
                                        <option>CLASS-6</option>
                                        <option>CLASS-7</option>
                                    </select>
                                </div>
                                {{-- TC --}}
                                <div class="div" style="margin-top: 20px">
                                    <select class="form-control" name="tc">
                                        <option>Choose TC Name</option>
                                        @foreach ($getuser as $user)
                                            <option>{{ $user->name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>

                                {{-- lane --}}

                                <div class="div" style="margin-top: 20px">
                                    <select class="form-control" name="lane">

                                        <option>Choose Lane</option>
                                        <option>LANE-1</option>

                                    </select>
                                </div>



                                <div class="text-center" style="margin-top: 20px">
                                    <button type="submit" class="btn btn-success btn-sm">submit</button>
                                </div>


                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

</form>

@endsection