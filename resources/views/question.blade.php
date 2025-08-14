@extends('layout.master')
@section('content')
    <div class="card">
        <div class="card-body text-center">
            <form action="{{ route('getanswer') }}" method="POST" name="QuestionForm" id="QuestionForm">
                {{ csrf_field() }}
            <h5 class="card-title">{{ $question->question }}</h5>
                <input type="hidden" name="questionid" id="questionid" value="{{ $question->id }}">
                <input type="hidden" name="answer" id="answer" value="">
            <button class="btn btn-success btn-sm" style="width: 200px;" onclick="YesFunction()">Evet</button>
            <button class="btn btn-danger btn-sm" style="width: 200px;">Hayır</button>
            </form>
        </div>
    </div>
    <script>
        function YesFunction() {
            document.getElementById("answer").value = "Evet";
            document.getElementById("QuestionForm").submit();
        }
    </script>
@endsection
