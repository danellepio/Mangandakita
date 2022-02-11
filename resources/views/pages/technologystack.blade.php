@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-4">
            <h1><strong> Technology Used </strong></h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card shadow-lg zoom" style="background-color:#FCFAEB;">
                <div class="card-header">
                <h5><strong>Laravel</strong></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">is a free, open-source PHP web framework, created by Taylor Otwell and intended 
                        for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-lg zoom" style="background-color:#FCFAEB;">
                <div class="card-header">
                <h5><strong>PHP</strong></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites. 
                        It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data.</p>
                </div>
            </div>
        </div>  
        
        <div class="col-md-4">
            <div class="card shadow-lg zoom" style="background-color:#FCFAEB;">
                <div class="card-header">
                <h5><strong>MySQL</strong></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">is an open-source relational database management system. 
                        Its name is a combination of "My", the name of co-founder Michael Widenius's daughter, and "SQL", the abbreviation for Structured Query Language.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 pt-4">
            <div class="card shadow-lg zoom" style="background-color:#FCFAEB;">
                <div class="card-header">
                <h5><strong>Composer</strong></h5>
                </div>
                <div class="card-body">
                    <p class="card-text"> is a tool for dependency management in PHP. 
                    It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.</p>
                </div>
            </div>
        </div>  

    </div>
</div>
@endsection