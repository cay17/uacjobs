function playAccordion() {
    let acc = document.getElementsByClassName("accordion");
    let i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
}

function add_remove_formation_field() {
    let max_fields = 4; //maximum input boxes allowed
    let wrapper = $(".formation_fields_wrap"); //Fields wrapper
    let add_button = $(".add_formation_field"); //Add button ID
    let remove_button = $(".remove_formation_field");


    let x = 1; //initlal text box count

    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) { //max input formation box allowed
            x++; //text box increment
            $(wrapper).append('<div class="adding_bloc' + x + '">\n' +
                '                                                    <div class="row pt-lg-2">\n' +
                '                                                        <div class="col-lg-6 form-group">\n' +
                '                                                            <label>Formation</label>\n' +
                '                                                            <input type="text" class="form-control" name="formation-' + x + '" style="border-color: #052387">\n' +
                '                                                        </div>\n' +
                '                                                        <div class="col-lg-3 form-group">\n' +
                '                                                            <label>Etablissement</label>\n' +
                '                                                            <input type="text" class="form-control" name="etablissement-' + x + '" style="border-color: #052387">\n' +
                '                                                        </div>\n' +
                '                                                        <div class="col-lg-3 form-group">\n' +
                '                                                            <label>Ville</label>\n' +
                '                                                            <input type="text" class="form-control" name="ville-' + x + '" style="border-color: #052387">\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                    <div class="row pt-lg-1">\n' +
                '                                                        <div class="col-6 form-group">\n' +
                '                                                            <label>Date de début</label>\n' +
                '                                                            <table>\n' +
                '                                                                <tbody>\n' +
                '                                                                <tr>\n' +
                '                                                                    <td><select class="form-control" name="mois-debut-formation-' + x + '">\n' +
                '                                                                        <option value="" >Mois</option>\n' +
                '                                                                        <option value="1">Janvier</option>\n' +
                '                                                                        <option value="2">Février</option>\n' +
                '                                                                        <option value="3">Mars</option>\n' +
                '                                                                        <option value="4">Avril</option>\n' +
                '                                                                        <option value="5">Mai</option>\n' +
                '                                                                        <option value="6">Juin</option>\n' +
                '                                                                        <option value="7" >Juillet</option>\n' +
                '                                                                        <option value="8">Aout</option>\n' +
                '                                                                        <option value="9">Septembre</option>\n' +
                '                                                                        <option value="10">Octobre</option>\n' +
                '                                                                        <option value="11">Novembre</option>\n' +
                '                                                                        <option value="12">Décembre</option>\n' +
                '                                                                    </select></td>\n' +
                '                                                                    <td><select class="form-control" name="annee-debut-formation-' + x + '">\n' +
                '                                                                        <option value="">Année</option>\n' +
                '                                                                        <option value="2020">2020</option>\n' +
                '                                                                        <option value="2019">2019</option>\n' +
                '                                                                        <option value="2018">2018</option>\n' +
                '                                                                        <option value="2017">2017</option>\n' +
                '                                                                        <option value="2016">2016</option>\n' +
                '                                                                        <option value="2015">2015</option>\n' +
                '                                                                        <option value="2014">2014</option>\n' +
                '                                                                        <option value="2013">2013</option>\n' +
                '                                                                        <option value="2012">2012</option>\n' +
                '                                                                        <option value="2011">2011</option>\n' +
                '                                                                        <option value="2010">2010</option>\n' +
                '                                                                        <option value="2009">2009</option>\n' +
                '                                                                        <option value="2008">2008</option>\n' +
                '                                                                        <option value="2007">2007</option>\n' +
                '                                                                        <option value="2006">2006</option>\n' +
                '                                                                        <option value="2005">2005</option>\n' +
                '                                                                        <option value="2004">2004</option>\n' +
                '                                                                        <option value="2003">2003</option>\n' +
                '                                                                        <option value="2002">2002</option>\n' +
                '                                                                        <option value="2001">2001</option>\n' +
                '                                                                        <option value="2000">2000</option>\n' +
                '                                                                        <option value="1999">1999</option>\n' +
                '                                                                        <option value="1998">1998</option>\n' +
                '                                                                        <option value="1997">1997</option>\n' +
                '                                                                        <option value="1996">1996</option>\n' +
                '                                                                        <option value="1995">1995</option>\n' +
                '                                                                        <option value="1994">1994</option>\n' +
                '                                                                        <option value="1993">1993</option>\n' +
                '                                                                        <option value="1992">1992</option>\n' +
                '                                                                        <option value="1991">1991</option>\n' +
                '                                                                        <option value="1990">1990</option>\n' +
                '                                                                        <option value="1989">1989</option>\n' +
                '                                                                        <option value="1988">1988</option>\n' +
                '                                                                        <option value="1987">1987</option>\n' +
                '                                                                        <option value="1986">1986</option>\n' +
                '                                                                        <option value="1985">1985</option>\n' +
                '                                                                        <option value="1984">1984</option>\n' +
                '                                                                        <option value="1983">1983</option>\n' +
                '                                                                        <option value="1982">1982</option>\n' +
                '                                                                        <option value="1981">1981</option>\n' +
                '                                                                        <option value="1980">1980</option>\n' +
                '                                                                        <option value="1979">1979</option>\n' +
                '                                                                        <option value="1978">1978</option>\n' +
                '                                                                        <option value="1977">1977</option>\n' +
                '                                                                        <option value="1976">1976</option>\n' +
                '                                                                        <option value="1975">1975</option>\n' +
                '                                                                        <option value="1974">1974</option>\n' +
                '                                                                        <option value="1973">1973</option>\n' +
                '                                                                        <option value="1972">1972</option>\n' +
                '                                                                        <option value="1971">1971</option>\n' +
                '                                                                        <option value="1970">1970</option>\n' +
                '                                                                        <option value="1969">1969</option>\n' +
                '                                                                        <option value="1968">1968</option>\n' +
                '                                                                        <option value="1967">1967</option>\n' +
                '                                                                        <option value="1966">1966</option>\n' +
                '                                                                        <option value="1965">1965</option>\n' +
                '                                                                        <option value="1964">1964</option>\n' +
                '                                                                        <option value="1963">1963</option>\n' +
                '                                                                        <option value="1962">1962</option>\n' +
                '                                                                        <option value="1961">1961</option>\n' +
                '                                                                        <option value="1960">1960</option>\n' +
                '                                                                    </select></td>\n' +
                '                                                                    <td style="background-color: #052387" class="form-control p-lg-2"><i class="fa fa-calendar" style="color: #FFFFFF;"></i></td>\n' +
                '                                                                </tr>\n' +
                '                                                                </tbody>\n' +
                '                                                            </table>\n' +
                '                                                        </div>\n' +
                '                                                        <div class="col-6 form-group">\n' +
                '                                                            <label>Date de fin</label>\n' +
                '                                                            <table>\n' +
                '                                                                <tbody>\n' +
                '                                                                <tr>\n' +
                '                                                                    <td><select class="form-control" name="mois-fin-formation-' + x + '">\n' +
                '                                                                        <option value="" >Mois</option>\n' +
                '                                                                        <option value="1">Janvier</option>\n' +
                '                                                                        <option value="2">Février</option>\n' +
                '                                                                        <option value="3">Mars</option>\n' +
                '                                                                        <option value="4">Avril</option>\n' +
                '                                                                        <option value="5">Mai</option>\n' +
                '                                                                        <option value="6">Juin</option>\n' +
                '                                                                        <option value="7" >Juillet</option>\n' +
                '                                                                        <option value="8">Aout</option>\n' +
                '                                                                        <option value="9">Septembre</option>\n' +
                '                                                                        <option value="10">Octobre</option>\n' +
                '                                                                        <option value="11">Novembre</option>\n' +
                '                                                                        <option value="12">Décembre</option>\n' +
                '                                                                    </select></td>\n' +
                '                                                                    <td><select class="form-control" name="annee-fin-formation-' + x + '">\n' +
                '                                                                        <option value="">Année</option>\n' +
                '                                                                        <option value="2020">2020</option>\n' +
                '                                                                        <option value="2019">2019</option>\n' +
                '                                                                        <option value="2018">2018</option>\n' +
                '                                                                        <option value="2017">2017</option>\n' +
                '                                                                        <option value="2016">2016</option>\n' +
                '                                                                        <option value="2015">2015</option>\n' +
                '                                                                        <option value="2014">2014</option>\n' +
                '                                                                        <option value="2013">2013</option>\n' +
                '                                                                        <option value="2012">2012</option>\n' +
                '                                                                        <option value="2011">2011</option>\n' +
                '                                                                        <option value="2010">2010</option>\n' +
                '                                                                        <option value="2009">2009</option>\n' +
                '                                                                        <option value="2008">2008</option>\n' +
                '                                                                        <option value="2007">2007</option>\n' +
                '                                                                        <option value="2006">2006</option>\n' +
                '                                                                        <option value="2005">2005</option>\n' +
                '                                                                        <option value="2004">2004</option>\n' +
                '                                                                        <option value="2003">2003</option>\n' +
                '                                                                        <option value="2002">2002</option>\n' +
                '                                                                        <option value="2001">2001</option>\n' +
                '                                                                        <option value="2000">2000</option>\n' +
                '                                                                        <option value="1999">1999</option>\n' +
                '                                                                        <option value="1998">1998</option>\n' +
                '                                                                        <option value="1997">1997</option>\n' +
                '                                                                        <option value="1996">1996</option>\n' +
                '                                                                        <option value="1995">1995</option>\n' +
                '                                                                        <option value="1994">1994</option>\n' +
                '                                                                        <option value="1993">1993</option>\n' +
                '                                                                        <option value="1992">1992</option>\n' +
                '                                                                        <option value="1991">1991</option>\n' +
                '                                                                        <option value="1990">1990</option>\n' +
                '                                                                        <option value="1989">1989</option>\n' +
                '                                                                        <option value="1988">1988</option>\n' +
                '                                                                        <option value="1987">1987</option>\n' +
                '                                                                        <option value="1986">1986</option>\n' +
                '                                                                        <option value="1985">1985</option>\n' +
                '                                                                        <option value="1984">1984</option>\n' +
                '                                                                        <option value="1983">1983</option>\n' +
                '                                                                        <option value="1982">1982</option>\n' +
                '                                                                        <option value="1981">1981</option>\n' +
                '                                                                        <option value="1980">1980</option>\n' +
                '                                                                        <option value="1979">1979</option>\n' +
                '                                                                        <option value="1978">1978</option>\n' +
                '                                                                        <option value="1977">1977</option>\n' +
                '                                                                        <option value="1976">1976</option>\n' +
                '                                                                        <option value="1975">1975</option>\n' +
                '                                                                        <option value="1974">1974</option>\n' +
                '                                                                        <option value="1973">1973</option>\n' +
                '                                                                        <option value="1972">1972</option>\n' +
                '                                                                        <option value="1971">1971</option>\n' +
                '                                                                        <option value="1970">1970</option>\n' +
                '                                                                        <option value="1969">1969</option>\n' +
                '                                                                        <option value="1968">1968</option>\n' +
                '                                                                        <option value="1967">1967</option>\n' +
                '                                                                        <option value="1966">1966</option>\n' +
                '                                                                        <option value="1965">1965</option>\n' +
                '                                                                        <option value="1964">1964</option>\n' +
                '                                                                        <option value="1963">1963</option>\n' +
                '                                                                        <option value="1962">1962</option>\n' +
                '                                                                        <option value="1961">1961</option>\n' +
                '                                                                        <option value="1960">1960</option>\n' +
                '                                                                    </select></td>\n' +
                '                                                                    <td style="background-color: #052387" class="form-control p-lg-2"><i class="fa fa-calendar" style="color: #FFFFFF;"></i></td>\n' +
                '                                                                </tr>\n' +
                '                                                                </tbody>\n' +
                '                                                            </table>\n' +
                '                                                        </div>\n' +
                '                                                    </div>\n' +
                '                                                    <div class="form-group p-lg-1">\n' +
                '                                                    <label>Description</label>\n' +
                '                                                    <textarea class="form-control" name="description-formation-' + x + '" rows="3" style="border-color: #052387"></textarea>\n' +
                '                                                </div>\n' +
                '                                                </div>'); //add input formation box

        }
    });

    $(remove_button).click(function (e) {
        e.preventDefault();
        $('.adding_bloc' + x + '').remove();
        x--;
    });
}

function add_remove_experience_field() {

    let max_fields = 4; //maximum input boxes allowed
    let wrapper = $(".experience_fields_wrap"); //Fields wrapper
    let add_button = $(".add_experience_field"); //Add button ID
    let remove_button = $(".remove_experience_field");


    let x = 1; //initlal text box count

    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) { //max input formation box allowed
            x++; //text box increment
            $(wrapper).append('<div class="adding_bloc' + x + '">\n' +
                '                                <div class="row pt-lg-2">\n' +
                '                                        <div class="col-lg-6 form-group">\n' +
                '                                            <label>Poste</label>\n' +
                '                                            <input type="text" class="form-control" name="poste-' + x + '" style="border-color: #052387">\n' +
                '                                        </div>\n' +
                '                                        <div class="col-lg-3 form-group">\n' +
                '                                            <label>Employeur</label>\n' +
                '                                            <input type="text" class="form-control" name="employeur-' + x + '" style="border-color: #052387">\n' +
                '                                        </div>\n' +
                '                                        <div class="col-lg-3 form-group">\n' +
                '                                            <label>Ville</label>\n' +
                '                                            <input type="text" class="form-control" name="ville-poste-' + x + '" style="border-color: #052387">\n' +
                '                                        </div>\n' +
                '                                </div>\n' +
                '                                <div class="row pt-lg-1">\n' +
                '                                        <div class="col-6 form-group">\n' +
                '                                            <label>Date de début</label>\n' +
                '                                            <table>\n' +
                '                                                <tbody>\n' +
                '                                                <tr>\n' +
                '                                                    <td><select class="form-control" name="mois-debut-poste-' + x + '">\n' +
                '                                                            <option value="" >Mois</option>\n' +
                '                                                            <option value="1">Janvier</option>\n' +
                '                                                            <option value="2">Février</option>\n' +
                '                                                            <option value="3">Mars</option>\n' +
                '                                                            <option value="4">Avril</option>\n' +
                '                                                            <option value="5">Mai</option>\n' +
                '                                                            <option value="6">Juin</option>\n' +
                '                                                            <option value="7" >Juillet</option>\n' +
                '                                                            <option value="8">Aout</option>\n' +
                '                                                            <option value="9">Septembre</option>\n' +
                '                                                            <option value="10">Octobre</option>\n' +
                '                                                            <option value="11">Novembre</option>\n' +
                '                                                            <option value="12">Décembre</option>\n' +
                '                                                        </select></td>\n' +
                '                                                    <td><select class="form-control" name="annee-debut-poste-' + x + '">\n' +
                '                                                            <option value="">Année</option>\n' +
                '                                                            <option value="2020">2020</option>\n' +
                '                                                            <option value="2019">2019</option>\n' +
                '                                                            <option value="2018">2018</option>\n' +
                '                                                            <option value="2017">2017</option>\n' +
                '                                                            <option value="2016">2016</option>\n' +
                '                                                            <option value="2015">2015</option>\n' +
                '                                                            <option value="2014">2014</option>\n' +
                '                                                            <option value="2013">2013</option>\n' +
                '                                                            <option value="2012">2012</option>\n' +
                '                                                            <option value="2011">2011</option>\n' +
                '                                                            <option value="2010">2010</option>\n' +
                '                                                            <option value="2009">2009</option>\n' +
                '                                                            <option value="2008">2008</option>\n' +
                '                                                            <option value="2007">2007</option>\n' +
                '                                                            <option value="2006">2006</option>\n' +
                '                                                            <option value="2005">2005</option>\n' +
                '                                                            <option value="2004">2004</option>\n' +
                '                                                            <option value="2003">2003</option>\n' +
                '                                                            <option value="2002">2002</option>\n' +
                '                                                            <option value="2001">2001</option>\n' +
                '                                                            <option value="2000">2000</option>\n' +
                '                                                            <option value="1999">1999</option>\n' +
                '                                                            <option value="1998">1998</option>\n' +
                '                                                            <option value="1997">1997</option>\n' +
                '                                                            <option value="1996">1996</option>\n' +
                '                                                            <option value="1995">1995</option>\n' +
                '                                                            <option value="1994">1994</option>\n' +
                '                                                            <option value="1993">1993</option>\n' +
                '                                                            <option value="1992">1992</option>\n' +
                '                                                            <option value="1991">1991</option>\n' +
                '                                                            <option value="1990">1990</option>\n' +
                '                                                            <option value="1989">1989</option>\n' +
                '                                                            <option value="1988">1988</option>\n' +
                '                                                            <option value="1987">1987</option>\n' +
                '                                                            <option value="1986">1986</option>\n' +
                '                                                            <option value="1985">1985</option>\n' +
                '                                                            <option value="1984">1984</option>\n' +
                '                                                            <option value="1983">1983</option>\n' +
                '                                                            <option value="1982">1982</option>\n' +
                '                                                            <option value="1981">1981</option>\n' +
                '                                                            <option value="1980">1980</option>\n' +
                '                                                            <option value="1979">1979</option>\n' +
                '                                                            <option value="1978">1978</option>\n' +
                '                                                            <option value="1977">1977</option>\n' +
                '                                                            <option value="1976">1976</option>\n' +
                '                                                            <option value="1975">1975</option>\n' +
                '                                                            <option value="1974">1974</option>\n' +
                '                                                            <option value="1973">1973</option>\n' +
                '                                                            <option value="1972">1972</option>\n' +
                '                                                            <option value="1971">1971</option>\n' +
                '                                                            <option value="1970">1970</option>\n' +
                '                                                            <option value="1969">1969</option>\n' +
                '                                                            <option value="1968">1968</option>\n' +
                '                                                            <option value="1967">1967</option>\n' +
                '                                                            <option value="1966">1966</option>\n' +
                '                                                            <option value="1965">1965</option>\n' +
                '                                                            <option value="1964">1964</option>\n' +
                '                                                            <option value="1963">1963</option>\n' +
                '                                                            <option value="1962">1962</option>\n' +
                '                                                            <option value="1961">1961</option>\n' +
                '                                                            <option value="1960">1960</option>\n' +
                '                                                        </select></td>\n' +
                '                                                    <td style="background-color: #052387" class="form-control p-lg-2"><i class="fa fa-calendar" style="color: #FFFFFF;"></i></td>\n' +
                '                                                </tr>\n' +
                '                                                </tbody>\n' +
                '                                            </table>\n' +
                '                                        </div>\n' +
                '                                        <div class="col-6 form-group">\n' +
                '                                            <label>Date de fin</label>\n' +
                '                                            <table>\n' +
                '                                                <tbody>\n' +
                '                                                <tr>\n' +
                '                                                    <td><select class="form-control" name="mois-fin-poste-' + x + '">\n' +
                '                                                            <option value="" >Mois</option>\n' +
                '                                                            <option value="1">Janvier</option>\n' +
                '                                                            <option value="2">Février</option>\n' +
                '                                                            <option value="3">Mars</option>\n' +
                '                                                            <option value="4">Avril</option>\n' +
                '                                                            <option value="5">Mai</option>\n' +
                '                                                            <option value="6">Juin</option>\n' +
                '                                                            <option value="7" >Juillet</option>\n' +
                '                                                            <option value="8">Aout</option>\n' +
                '                                                            <option value="9">Septembre</option>\n' +
                '                                                            <option value="10">Octobre</option>\n' +
                '                                                            <option value="11">Novembre</option>\n' +
                '                                                            <option value="12">Décembre</option>\n' +
                '                                                        </select></td>\n' +
                '                                                    <td><select class="form-control" name="annee-fin-poste-' + x + '">\n' +
                '                                                            <option value="">Année</option>\n' +
                '                                                            <option value="2020">2020</option>\n' +
                '                                                            <option value="2019">2019</option>\n' +
                '                                                            <option value="2018">2018</option>\n' +
                '                                                            <option value="2017">2017</option>\n' +
                '                                                            <option value="2016">2016</option>\n' +
                '                                                            <option value="2015">2015</option>\n' +
                '                                                            <option value="2014">2014</option>\n' +
                '                                                            <option value="2013">2013</option>\n' +
                '                                                            <option value="2012">2012</option>\n' +
                '                                                            <option value="2011">2011</option>\n' +
                '                                                            <option value="2010">2010</option>\n' +
                '                                                            <option value="2009">2009</option>\n' +
                '                                                            <option value="2008">2008</option>\n' +
                '                                                            <option value="2007">2007</option>\n' +
                '                                                            <option value="2006">2006</option>\n' +
                '                                                            <option value="2005">2005</option>\n' +
                '                                                            <option value="2004">2004</option>\n' +
                '                                                            <option value="2003">2003</option>\n' +
                '                                                            <option value="2002">2002</option>\n' +
                '                                                            <option value="2001">2001</option>\n' +
                '                                                            <option value="2000">2000</option>\n' +
                '                                                            <option value="1999">1999</option>\n' +
                '                                                            <option value="1998">1998</option>\n' +
                '                                                            <option value="1997">1997</option>\n' +
                '                                                            <option value="1996">1996</option>\n' +
                '                                                            <option value="1995">1995</option>\n' +
                '                                                            <option value="1994">1994</option>\n' +
                '                                                            <option value="1993">1993</option>\n' +
                '                                                            <option value="1992">1992</option>\n' +
                '                                                            <option value="1991">1991</option>\n' +
                '                                                            <option value="1990">1990</option>\n' +
                '                                                            <option value="1989">1989</option>\n' +
                '                                                            <option value="1988">1988</option>\n' +
                '                                                            <option value="1987">1987</option>\n' +
                '                                                            <option value="1986">1986</option>\n' +
                '                                                            <option value="1985">1985</option>\n' +
                '                                                            <option value="1984">1984</option>\n' +
                '                                                            <option value="1983">1983</option>\n' +
                '                                                            <option value="1982">1982</option>\n' +
                '                                                            <option value="1981">1981</option>\n' +
                '                                                            <option value="1980">1980</option>\n' +
                '                                                            <option value="1979">1979</option>\n' +
                '                                                            <option value="1978">1978</option>\n' +
                '                                                            <option value="1977">1977</option>\n' +
                '                                                            <option value="1976">1976</option>\n' +
                '                                                            <option value="1975">1975</option>\n' +
                '                                                            <option value="1974">1974</option>\n' +
                '                                                            <option value="1973">1973</option>\n' +
                '                                                            <option value="1972">1972</option>\n' +
                '                                                            <option value="1971">1971</option>\n' +
                '                                                            <option value="1970">1970</option>\n' +
                '                                                            <option value="1969">1969</option>\n' +
                '                                                            <option value="1968">1968</option>\n' +
                '                                                            <option value="1967">1967</option>\n' +
                '                                                            <option value="1966">1966</option>\n' +
                '                                                            <option value="1965">1965</option>\n' +
                '                                                            <option value="1964">1964</option>\n' +
                '                                                            <option value="1963">1963</option>\n' +
                '                                                            <option value="1962">1962</option>\n' +
                '                                                            <option value="1961">1961</option>\n' +
                '                                                            <option value="1960">1960</option>\n' +
                '                                                        </select></td>\n' +
                '                                                    <td style="background-color: #052387" class="form-control p-lg-2"><i class="fa fa-calendar" style="color: #FFFFFF;"></i></td>\n' +
                '                                                </tr>\n' +
                '                                                </tbody>\n' +
                '                                            </table>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                <div class="form-group p-lg-1">\n' +
                '                                    <label for="poste-description">Description</label>\n' +
                '                                    <textarea class="form-control" name="poste-description-' + x + '" rows="3" style="border-color: #052387"></textarea>\n' +
                '                                </div>\n' +
                '                            </div>'); //add input formation box

        }
    });

    $(remove_button).click(function (e) {
        e.preventDefault();
        $('.adding_bloc' + x + '').remove();
        x--;
    });

}

function add_remove_competence_field() {
    let max_fields = 4; //maximum input boxes allowed
    let wrapper = $(".competence_fields_wrap"); //Fields wrapper
    let add_button = $(".add_competence_field"); //Add button ID
    let remove_button = $(".remove_competence_field");


    let x = 1; //initlal text box count

    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) { //max input formation box allowed
            x++; //text box increment
            $(wrapper).append('<div class=".adding_bloc' + x + '">\n' +
                '                                <div class="row pt-lg-2">\n' +
                '                                    <div class="col-6 form-group">\n' +
                '                                        <label>Compétence</label>\n' +
                '                                        <input type="text" class="form-control" name="competence-' + x + '" style="border-color: #052387">\n' +
                '                                    </div>\n' +
                '                                    <div class="col-6 form-group">\n' +
                '                                        <label>Niveau</label>\n' +
                '                                        <select class="form-control" name="niveau-' + x + '" id="niveau">\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                        </select>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                            </div>'); //add input formation box

        }
    });

    $(remove_button).click(function (e) {
        e.preventDefault();
        $('.adding_bloc' + x + '').remove();
        x--;
    });
}

function add_remove_langue_field() {
    let max_fields = 4; //maximum input boxes allowed
    let wrapper = $(".langue_fields_wrap"); //Fields wrapper
    let add_button = $(".add_langue_field"); //Add button ID
    let remove_button = $(".remove_langue_field");

    let x = 1; //initlal text box count

    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) { //max input formation box allowed
            x++; //text box increment
            $(wrapper).append('<div class="adding_bloc' + x + '">\n' +
                '                                <div class="row p-lg-2">\n' +
                '                                    <div class="col-6 form-group">\n' +
                '                                        <label>Langues</label>\n' +
                '                                        <input type="text" class="form-control" name="langue-' + x + '" style="border-color: #052387">\n' +
                '                                    </div>\n' +
                '                                    <div class="col-6 form-group">\n' +
                '                                        <label>Niveau</label>\n' +
                '                                        <select class="form-control" name="niveau-langue-' + x + '" id="niveau-langue">\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                            <option value=""></option>\n' +
                '                                        </select>\n' +
                '                                    </div>\n' +
                '                                </div>\n' +
                '                            </div>'); //add input formation box

        }
    });

    $(remove_button).click(function (e) {
        e.preventDefault();
        $('.adding_bloc' + x + '').remove();
        x--;
    });

}

function add_remove_interest_field() {
    let max_fields = 4; //maximum input boxes allowed
    let wrapper = $(".interest_fields_wrap"); //Fields wrapper
    let add_button = $(".add_interest_field"); //Add button ID
    let remove_button = $(".remove_interest_field");

    let x = 1; //initlal text box count

    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) { //max input formation box allowed
            x++; //text box increment
            $(wrapper).append(' <div class="adding_bloc' + x + '">\n' +
                '                                <div class="form-group p-lg-2">\n' +
                '                                    <label>Centre d\'intérêt</label>\n' +
                '                                    <input type="text" class="form-control" name="interest-' + x + '" style="border-color: #052387">\n' +
                '                                </div>\n' +
                '                            </div>'); //add input formation box

        }
    });

    $(remove_button).click(function (e) {
        e.preventDefault();
        $('.adding_bloc' + x + '').remove();
        x--;
    });

}

function input_content() {
    $('input[type="file"]').change(function (e) {
        let fileName = e.target.files[0].name;
        $(this).next('.custom-file-label').html(fileName);
    });
}

$(document).ready(function () {
    playAccordion();
    input_content();
    add_remove_formation_field();
    add_remove_experience_field();
    add_remove_competence_field();
    add_remove_langue_field();
    add_remove_interest_field();
});