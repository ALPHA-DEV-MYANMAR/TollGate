@extends('layouts.master')


@section('title','cashup')

@section('content')

@section('action')


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

        <h5 class="text-center"> <b> <i>Cash Up</i> </b></h5>
        <form action="{{ url('/CashUp') }}" method="POST">
                @csrf
            <div class="row">
                <div class="col-md-12">
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
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>

            <div class="col-md-12">
                <div class="card">
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <table class="table text-center table-bordered">
                                <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">Vehicle Class</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th scope="row"><input name="class_one" type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <th scope="row"> <input name="class_two"  type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <th scope="row"> <input name="class_three" type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <th scope="row"> <input name="class_four" type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <th scope="row"> <input name="class_five"  type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <th scope="row"> <input name="class_six"  type="number" style="width: 100px"></th>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <th scope="row"> <input type="text" name="class_seven" style="width: 100px"></th>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button onclick="<script>alert('Are you sure!');</script>" class="btn btn-success btn-sm form-control" type="submit">submit</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>  
            </div>

        </form>

    </div>

@endsection