<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partial/headCode');
    </head>
    <body>
        @include('partial/validationModal')
        @include('partial/navbar', ['viewType' => session()->get("viewType"), 'formType' => session()->get("formType")])
        <div class="container push-down">
            @section('form')
            @show
            <script>
                //form validation
                document.addEventListener('DOMContentLoaded', function(){
                    var form = document.getElementById('myForm');
                    form.addEventListener('submit', function(evt){

                        var empty_req_els = _getEmptyRequiredInputs();
                        if(empty_req_els.length > 0)
                        {
                            evt.preventDefault();
                            highlightEmptyInputs();
                            var rect = empty_req_els[0].parentElement.getBoundingClientRect();
                            var header_height = document.querySelector('.navbar').offsetHeight;
                            var top_pos = window.scrollY + rect.y - header_height - 30; 
                            window.scrollTo({top: top_pos, left: 0, behavior: 'smooth'});
                            var modal = document.getElementById('vModal');
                            $('#vModal').modal('show');
                        }
                    });

                    function _getEmptyRequiredInputs()
                    {
                        var emptyEls = [];
                        var els = document.querySelectorAll('[data-required_field="true"]');
                        for(var i = 0; i < els.length; i++)
                        {
                            if(els[i].value.trim() === '')
                            {
                                emptyEls.push(els[i])
                            }
                        }

                        return emptyEls;
                    }

                    function highlightEmptyInputs()
                    {
                        var emptyEls = _getEmptyRequiredInputs();
                        for(var i = 0; i < emptyEls.length; i++)
                        {
                            emptyEls[i].classList.add('highlight');
                        }
                    }
                });
            </script>
            <script src="{{ asset('./public/js/utils.js') }}"></script>
            <script src="{{ asset('./public/js/main.js') }}"></script>
        </div>
    </body>
</html>