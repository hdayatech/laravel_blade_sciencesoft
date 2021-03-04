@extends('layouts.app')
@section('title')
    {{ t("Create Portfolio")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">{{ t("New Portfolio")  }}</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('portfolios.index') }}" class="btn btn-primary">{{ t("Back")  }}</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                               <form method="post" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">

                                       <div class="form-group col-sm-3">
                                           <label for="tag">{{ t("Technology")  }}</label>
                                           <select class="custom-select selectpicker" id="basic" multiple="multiple"  multiple data-live-search="true" name="technology[]">
                                               <option value="all">All</option>
                                               @foreach($technologies as $technology)
                                               <option value="{{ $technology->name }}">{{ $technology->name }}</option>
                                               @endforeach
                                           </select>
                                       </div>
                                       <div class="form-group col-sm-3">
                                           <label for="industry">{{ t("Industry")  }}</label>
                                           <select class="custom-select selectpicker" id="basic" multiple="multiple"  multiple data-live-search="true" name="industry[]">
                                               <option value="all">All</option
                                               @foreach($industries as $industry)
                                               <option value="{{ $industry->name }}">{{ $industry->name }}</option>
                                                @endforeach
                                        </select>
                                       </div>
                                       <!-- Name Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="name">{{ t("Name")  }}</label>
                                           <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                       </div>
                                       <!-- Name Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="title">{{ t("Title")  }}</label>
                                           <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                       </div>
                                       <!-- Name Lang Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="sub_title">{{ t("Sub Title")  }}</label>
                                           <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title') }}">
                                       </div>
                                       <!-- Description Text Field -->
                                       <div class="form-group col-sm-6 col-lg-12">
                                           <label for="description_text">{{ t("Blade Link")  }}</label>
                                           <textarea class="form-control" id="description_text" name="description_text"></textarea>
                                       </div>

                                       <!-- Image Field -->
                                       <div class="form-group col-sm-6">
                                           <div class="form-group">
                                               <label for="Image">{{ t("Image")  }}</label><br>
                                               <input type="file" style="width: 500px;" id="images" name="image" value="{{ old('image') }}">
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Submit Field -->
                                   <div class="form-group col-sm-12">
                                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                       <a href="{{ route('portfolios.index') }}" class="btn btn-light">{{ t("Cancel")  }}</a>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
