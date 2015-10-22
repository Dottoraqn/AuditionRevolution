@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="messageSelect">
   <ul>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
       <li><div class="message">
        Lorem ipsum dolor sit amet!
    </div></li>
   </ul>
</div>
<div class="messageContent">
<!-- new message modal to be written in later-->
    <div class="well well-lg">
        <div class="subject">
            Lorem ipsum dolor sit amet!
        </div>
        <div class="content">
            Dear Actor,
            
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ad enim itaque saepe nesciunt a odit alias esse quia possimus eaque, quos quas expedita assumenda cum laudantium ea, amet maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quo dicta facilis cupiditate id cumque placeat doloremque? Rem illo quia labore cum numquam ratione, ipsum consectetur, architecto maiores iusto vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur commodi, laborum fugiat, eius modi est doloremque magni corrupti, ipsam asperiores, quam quaerat veritatis. Laudantium, laboriosam, nulla ut autem impedit deserunt?
            
            Have a nice day,
            
            Director
        </div>
    </div>
</div>

@endsection
