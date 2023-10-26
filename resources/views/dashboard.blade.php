<x-app-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <button onClick="window.location.reload();" class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;">Refresh</button>
        <div class="py-12">
            @foreach ($quote as $quotes)
            <div style="width: 18rem; margin: 20px; display: inline-block;">
                <div style="background-color: #f8f9fa; border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
                    <div style="font-weight: bold; font-size: 16px; padding-bottom: 10px;">Quote</div>
                    <div style="font-size: 14px;">
                        <blockquote style="margin: 0;">
                            <p>{{$quotes}}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
</x-app-layout>
