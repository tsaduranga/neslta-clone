@extends('layouts.app')

@section('content')





             <div class="row">
                                                <div class="col-sm-12">


<div class="row">
    <div class="col-sm-10">
        <form class="form" method="post" action="{{ route('frontend.tickets.store')}}" >





            @csrf

            <div class="form-group">
                <label>Help Topic</label>
                <select id="" class="form-control" name="topic" required value="{{ old('topic') }}">
                        <option value="" selected disabled>-- Choose --</option>

                        @foreach ($help_topics as $help_topic)
                            <option value="{{ $help_topic['id'] }}">{{ $help_topic['name'] }}</option>
                        @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input class="form-control" id="subject" required size="40" name="subject" type="text"
                value="{{ old('subject') }}"/>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" required id="message" rows="10" cols="60">
                    {{ old('message') }}
                </textarea>
            </div>
                        <div class="form-group">
                <button type="submit" class="button learn-more-btn home-link hvr-bounce-to-right">Submit</button>
            </div>
        </form>
    </div>
</div>



            </div>
        </div>
        </div>







@endsection
