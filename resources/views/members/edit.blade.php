@extends('base') 
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#dei").val('{{ $member->dei }}');
    $("#survey").val('{{ $member->survey }}');
    $("#phase").val('{{ $member->phase }}');
    $("#block").val('{{ $member->block }}');

    });
</script>

<div class="row">
<img src="teacher.jfif" alt="teacher" width="1000px"  style="display: block; margin-left: auto;margin-right:auto;">

    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a member</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('members.update', $member->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $member->name }}" />
            </div>
            <div class="form-group">
            <label for="cnic">CNIC</label>
                <input type="text" class="form-control" name="cnic" value={{ $member->cnic }} />
            </div>
            <div class="form-group">
            <label for="fathers_name">Fathers Name:</label>
                <input type="text" class="form-control" name="fathers_name" value="{{ $member->fathers_name }}" />
            </div>
            <div class="form-group">
            <label for="occupation">Occupation:</label>
            <textarea class="form-control" name="occupation">{{ $member->occupation }}</textarea>
            </div>
            <div class="form-group">
            <label for="address">Address:</label>
                <textarea class="form-control" name="address">{{ $member->address }}</textarea>
            </div>
            <div class="form-group">
            <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" value={{ $member->phone }} />
            </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" value={{ $member->email }}>
          </div>
          <div>
            <label for="msid">MS ID</label>
            <input type="number" name="msid" value={{ $member->msid }}>
          </div>
          <div>
            <label for="dei">DEI:</label>
            <select name="dei" id="dei">
              <option value="SELECT DEI">SELECT DEI</option>
              <option value="ALLAH PAI">ALLAH PAI</option>
              <option value="SHAHI CHIB">SHAHI CHIB</option>
              <option value="LOHAR KOLANG">LOHAR KOLANG</option>
              
            </select>
          </div>
          <br>
          <div>
            <label for="survey">SURVEY:</label>
            <select name="survey" id="survey">
                <option value="select survey">SELECT SURVEY</option>
                <option value="15">15</option>
                <option value="124">124</option>
                <option value="125">125</option>
            </select>
        </div>
        <br>
        <div>
          <label for="phase">PHASE:</label>
          <select name="phase" id="phase">
              <option value="select phase">SELECT PHASE</option>
              <option value="1">1</option>
              <option value="2">2</option>
          </select>
        </div>
        <br>
        <div>
          <label for="block">BLOCK:</label>
          <select name="block" id="block">
              <option value="select block">SELECT BLOCK</option>
              <option value="1">1</option>
              <option value="2">2</option>
          </select>
        </div>
            <div class="form-group">
            <label for="plot_no">plot_no:</label>
                <input type="text" class="form-control" name="plot_no" value={{ $member->plot_no }} />
            </div>
            <div class="form-group">
            <label for="plot_category">plot_category:</label>
                <input type="text" class="form-control" name="plot_category" value={{ $member->plot_category }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection