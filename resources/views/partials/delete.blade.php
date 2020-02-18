<p>
    <a href="" type="button" class="btn btn-outline-danger"  onclick="event.preventDefault();document.getElementById('{{ $id_form }}').submit();">
{{ $btn_message }}</a>
    <form style="display: none" action="{{$action}}" method="post" id="{{ $id_form }}">
        @method('delete')
        @csrf
    </form>
</p>
