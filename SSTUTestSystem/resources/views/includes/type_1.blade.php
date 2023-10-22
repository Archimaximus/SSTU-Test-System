@section('type_1')
    <div class="content-block">
        <fieldset>
            <legend><h3>&nbsp;Вопрос <i>например через i++</i>&nbsp;</h3></legend>
            <div class="question">
                <br/>Текст задания находится здесь. <br/><br/><img src="img/sstumain.jpg" alt="" style="max-height: 350px"><br/>
            </div>

            <div class="question">
                <form>
                    <div>
                        <input id="var_1" type="radio" name="var" value="1"> <!-- type: text, number -->
                        <label for="var_1">Вариант 1</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_2" type="radio" name="var" value="1">
                        <label for="var_2">Вариант 2</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_3" type="radio" name="var" value="3">
                        <label for="var_3">Вариант 3</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>
                    <div>
                        <input id="var_4" type="radio" name="var" value="4">
                        <label for="var_4">Вариант 4</label><br/><img src="" alt="" style="max-height: 300px">
                    </div>

                    <div class="quest-btn">
                        <input class="btn btn-2" type="submit" value="Предыдущий"/>
                        <input class="btn btn-1" type="submit" value="Подтвердить"/>
                        <input class="btn btn-2" type="submit" value="Следующий"/>
                    </div>
                </form>
            </div>

        </fieldset>
    </div>


    <!--<input class="btn btn-1" type="submit" value="Подтвердить" />
    <div class="quest-btn">
        <button class="btn btn-2" onclick="document.location='/attestation'">Предыдущий</button>
        <button class="btn btn-1" onclick="document.location='/attestation'">Подтвердить ответ</button>
        <button class="btn btn-2" onclick="document.location='/attestation'">Следующий</button>
    </div>

     вопрос с участием списка хз
    <input name="city" list="cities" />
    <datalist id="cities">
       <option value="Naples" />
       <option value="London" />
       <option value="Berlin" />
       <option value="New York" />
       <option value="Frattamaggiore" />
    </datalist>

    <div class="dropdown">
      <input type="text" />
      <select  onchange="this.previousElementSibling.value=this.value; this.previousElementSibling.focus()">
        <option>This is option 1</option>
        <option>Option 2</option>
      </select>
    </div>

      .dropdown {
      position: relative;
      width: 200px;
    }

    .dropdown select {
      width: 100%;
    }

    .dropdown > * {
      box-sizing: border-box;
      height: 1.5em;
    }

    .dropdown input {
      position: absolute;
      width: calc(100% - 20px);
    }
    -->
