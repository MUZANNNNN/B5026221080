@extends('EASMaster')

@section('title', 'Chat')

@section('konten')
    <div class="text-center text-uppercase mt-3"> <h2>Chat</h2> </div>

    <div class="text-center">
	<br>

    @foreach ($chats as $chat)
    <?php
    $pesanArray = explode(' ', $chat->pesan);

        foreach ($pesanArray as &$kata) {
            switch ($kata) {
                case ':))':
                    $kata = '<img src="1.png" alt=":))">';
                    break;
                case ':C':
                    $kata = '<img src="4.png" alt=":C">';
                    break;
                case ':3':
                    $kata = '<img src="2.png" alt=":3">';
                    break;
                case ';)':
                    $kata = '<img src="5.png" alt=";)">';
                    break;
                case ':P':
                    $kata = '<img src="3.png" alt=":P">';
                    break;
            }
        }
    ?>

    <p>{!! implode(' ', $pesanArray) !!}</p>
    <br>
    <br>
    @endforeach
    </div>
@endsection
