@extends('layouts.master')


@section('title','cashupsummary')

@section('content')

@section('action')

<h5> <b> <i>Cash Up Summary</i> </b></h5>

<form action="{{ url('/summarySearch') }}" method="GET">
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

        <button class="btn btn-success btn-sm"><i class="fas fa-search"></i>Search</button>

    </div>

</form>

    <div class="comtainer">
        <div class="row">
            <div class="col-md-12">
                    <table class="table table-striped text-center">
                        <thead class="bg-dark text-white table-bordered ">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Vehicle Count</th>
                            <th scope="col">Computed Amount</th>
                            <th scope="col">Collected Amount</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($getAllCashUp as $cashup)
                                <tr>
                                    <th>{{ $cashup ->date }}</th>
                                    <td>{{ $cashup ->vehicle_count }}</td>
                                    <td>{{ $cashup ->computer_total_fees }}ks</td>
                                    <td>{{ $cashup ->cashup_total_fees }}ks</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $getAllCashUp -> links() }}
            </div>
        </div>
    </div>

@endsection