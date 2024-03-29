@extends('layouts.app')

@section('template_title')
    {{ $blog->name ?? 'Show Blog' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Blog</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $blog->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $blog->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
