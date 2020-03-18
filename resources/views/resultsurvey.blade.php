@extends('layouts.app')

@section('content')
<body>
    <div class="content">
        <div class="title">
            Result Survey
        </div>

        <div class="container">
        <div class="form-group">
                    <label>1. Total age group:</label>
                        <ul>
                            <li>Below 18: Total of {{ $totalAgeBelow18 }} people</li>
                            <li>18 to 35: Total of {{ $totalAgeBelow35 }} people</li>
                            <li>35 to 60: Total of {{ $totalAgeBelow60 }} people</li>
                            <li>Above 60: Total of {{ $totalAgeAbove60 }} people</li>
                        </ul>
                </div>
                <div class="form-group">
                    <label>2. Total Education level group:</label>
                        <ul>
                            <li>Secondary School and Below: Total of {{ $totalSecondaryLevel }} people</li>
                            <li>Diploma: Total of {{ $totalDiplomaLevel }} people</li>
                            <li>Degree: Total of {{ $totalDegreeLevel }} people</li>
                            <li>Post graduate degree: Total of {{ $totalPostGraduateLevel }} people</li>
                        </ul>
                </div>
                <div class="form-group">
                    <label>3. Total monthly income group:</label>
                        <ul>
                            <li>Less than RM 1000: Total of  {{ $totalIncomeBelow1000 }} people</li>
                            <li>Between RM 1000 to RM 3000: Total of {{ $totalIncomeBelow3000 }} people</li>
                            <li>Between RM 3000 to RM 5000: Total of {{ $totalIncomeBelow5000 }} people</li>
                            <li>More than RM 5000: Total of Total of {{ $totalIncomeAbove5000 }} people</li>
                        </ul>
                </div>
                <div class="form-group">
                    <label for="">4. Total gender group:</label>
                        <ul>
                            <li>Male: Total of {{ $totalGenderMale }} people</li>
                            <li>Female: Total of {{ $totalGenderFemale }} people</li>
                        </ul>
                </div>
                <a href="{{ route('home') }}" class="btn btn-xs btn-primary pull-right">Back</a>
        </div>
    </div>                
</body>
@endsection