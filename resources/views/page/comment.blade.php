{{--{!! Form::open(array('route' => 'front.fb', 'class' => '')) !!}--}}
<form action="{{route('form')}}" method="post">

</form>
<div>
    <label class="email">Your name</label>
    <input type="text" name="name" placeholder="Username"/>
</div>
<div>
    <label class="email">Your email</label>
    <input type="text" name="email" placeholder="E-mail"/>
</div>
<div>
    <label class="email">Comments</label>
    <input type="text" name="comments" placeholder="Comments"/>

</div>
<div>
    <input type="submit" name="signup_submit" value="Send"/>
</div>
<div class="send">
</div>
{{--{!! Form::close() !!}--}}
</form>