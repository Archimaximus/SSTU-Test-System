@section('type_2')
    <div class="content-block">
        <fieldset>
            <legend><h3>&nbsp;Вопрос <i>например через i++</i>&nbsp;</h3></legend>
            <div class="question">
                <br/>Текст задания находится здесь. <br/><br/><img src="" alt="" style="max-height: 350px"><br/>
            </div>

            <div class="question">
                <form>
                    <div>
                        <input id="var_1" type="checkbox" name="var" value="1"> <!-- type: text, number -->
                        <label for="var_1">Вариант 1</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_2" type="checkbox" name="var" value="1">
                        <label for="var_2">Вариант 2</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_3" type="checkbox" name="var" value="3">
                        <label for="var_3">Вариант 3</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_4" type="checkbox" name="var" value="4">
                        <label for="var_4">Вариант 4</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>

                    <div class="quest-btn">
                        <input class="btn btn-2" type="submit" value="Предыдущий"/>
                        <input class="btn btn-2" type="submit" value="Следующий"/>
                    </div>
                </form>
            </div>

        </fieldset>
    </div>
