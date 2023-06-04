@extends('master')

@section('title', 'create course')

@section('content')

<div class="row">
    <div class="col-6">
        <div class="card card-body">
            <form action="{{ route (course.store)}}" method="post">
                 @csrf
                 <div class="mb-3">
                    <label for="name" class="form-label"> Course Name</label>
                    <input type="email" class="form-control" id="name" name="name"
                    placeholder="Input Course Name">
                 </div>
                 <div class="mb-3">
                    <label for="desc" class="form-label"> Course Desciption</label>
                    <textarea class="form-control" id="desc" row="2" name="description"></textarea>
                 </div>
                 <div class="mb-3">
                    <label for="price" class="form-label"> Course Price</label>
                    <input type="number" class="form-control" id="price" name="price"
                    placeholder="Input Course Price">
                 </div>
                 <div class="mb-3">
                    <label class="form-label">Course Institution</label>
                    <select name="institution_id" class="form-select">
                        <option value="1">UBG</option>
                        <option value="2">UTM</option>
                        <option value="3">UNRAM</option>
                    </select>
                 </div>
            </form>

        </div>
    </div>
</div>

@endsection

