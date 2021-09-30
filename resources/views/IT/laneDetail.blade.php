@extends('layouts.master')

@section('title','home')

@section('content')

@section('action')

    <div class="container">

        <h5> <b> <i>  Job Listing</i> </b></h5>
    <form action="{{ url('/Search') }}" method="GET">
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

        <div style="padding: 2px">

            <button type="submit" class="btn btn-success btn-sm" ><i class="fas fa-search"></i>Search</button>

        </div>

    </form>


        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white ">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Tc</th>
                        <th scope="col" class="text-center">Date</th>
                        <th scope="col" class="text-center">Fee</th>
                        <th scope="col" class="text-center">Car Number</th>
                        <th scope="col" class="text-center">Class</th>
                        <th scope="col" class="text-center">Vehicle Image</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>


                        @foreach ($tollColData as $data)
                            <tr>
                                <td class="text-center"><b>{{ $data->id }}</b></td>
                                <td class="text-center"><b>{{ $data->tc_no }}</b></td>
                                <td class="text-center"><b>{{ $data->data_time }}</b></td>
                                <td class="text-center"><b>{{ $data->frees }}ks</b></td>
                                <td class="text-center"><b>{{  $data->car_no  }}</b></td>
                                <td class="text-center"><b>{{ $data->car_class }}</b></td>
                                <td class="text-center">
                                    <img src="{{ asset('upload/img/'.$data->imp_car_img) }}" alt="" style="width:100px;height:70px;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('singleview/'.$data->id) }}" type="button" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i>&nbsp;Info</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                    {{ $tollColData->links() }}

            </div>
        </div>
    </div>

@endsection