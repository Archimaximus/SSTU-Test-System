@extends('layouts.app')

@section('page_title')Тесты
@endsection

@section('content')
    <main>
        <div class="content-block">
            <div class="distant"><h2>Тесты текущего семестра</h2></div>
            <!--<fieldset>
            <legend>Мои курсы</legend>
              <div class="dropdown">
                <select>
                  <option value="">1 курс</option>
                  <option value="1">Предмет 1.1</option>
                  <option value="2">Предмет 1.2</option>
                  <option value="3">Предмет 1.3</option>
                </select>
              </div>
              <div class="dropdown">
                <select>
                  <option value="">2 курс</option>
                  <option value="4">Предмет 2.1</option>
                  <option value="5">Предмет 2.2</option>
                  <option value="6">Предмет 2.3</option>
                </select>
              </div>
              <div class="dropdown">
                <select>
                  <option value="">3 курс</option>
                  <option value="7">Предмет 3.1</option>
                  <option value="8">Предмет 3.2</option>
                  <option value="9">Предмет 3.3</option>
                </select>
              </div>
              <div class="dropdown">
                <select>
                  <option value="">4 курс</option>
                  <option value="10">Предмет 4.1</option>
                  <option value="11">Предмет 4.2</option>
                  <option value="12">Предмет 4.3</option>
                </select>
              </div>
              </fieldset>-->

            <button class="accordion">Семестр <i>Место для запроса номера актуального семестра</i></button>
            <div class="panel">
                <br/><p><a href="/preview">Предмет 1.1</a></p><br/>
                <br/><p><i>Место для запроса актуального теста</i></p><br/>
                <br/><p><i>Место для запроса актуального теста</i></p><br/>
                <br/><p><i>Место для запроса актуального теста</i></p><br/>
                <br/><p><i>Место для запроса актуального теста</i></p><br/>
                <br/><p><i>Место для запроса актуального теста</i></p><br/>
                <br/><p><i>Либо 1 запрос выводящий все тесты списком</i></p><br/>
            </div>



            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>

        </div>
    </main>
@endsection
