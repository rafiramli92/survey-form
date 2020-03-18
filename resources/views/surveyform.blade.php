@extends('layouts.app')

@section('content')
<body>
    <div class="content">
        <div class="title">
            Survey Form
        </div>

        <div class="container">
            <form action="/" method="POST">
            @csrf
                <div class="form-group">
                    <label>{{ $questions[0]['title'] }}</label>
                    <select class="form-control form-control-sm" name="{{ $questions[0]['id'] }}">
                        <option value="{{ $options[0]['id'] }}">Below 18</option>
                        <option value="{{ $options[1]['id'] }}">18 - 35</option>
                        <option value="{{ $options[2]['id'] }}">35 - 60</option>
                        <option value="{{ $options[3]['id'] }}">Above 60</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ $questions[1]['title'] }}</label>
                    <select class="form-control form-control-sm" name="{{ $questions[1]['id'] }}">
                        <option value="{{ $options[0]['id'] }}">Secondary school and below</option>
                        <option value="{{ $options[1]['id'] }}">Diploma</option>
                        <option value="{{ $options[2]['id'] }}">Degree</option>
                        <option value="{{ $options[3]['id'] }}">Post graduate degree</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>{{ $questions[2]['title'] }}</label>
                    <select class="form-control form-control-sm" name="{{ $questions[2]['id'] }}">
                        <option value="{{ $options[0]['id'] }}">Less than RM 1000</option>
                        <option value="{{ $options[1]['id'] }}">Between RM1000 to RM3000</option>
                        <option value="{{ $options[2]['id'] }}">Between RM3000 to RM5000</option>
                        <option value="{{ $options[3]['id'] }}">More than RM5000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">{{ $questions[3]['title'] }}</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $questions[3]['id'] }}" value="{{ $options[0]['id'] }}" checked>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $questions[3]['id'] }}" value="{{ $options[1]['id'] }}" checked>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>                
</body>
@endsection