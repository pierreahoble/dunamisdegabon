import React, { Component } from "react";
import ReactDOM from "react-dom";
import Axios from "axios";
import Pagination from "react-js-pagination";

export class Banque extends Component {
    constructor(props) {
        super(props);

        this.state = {
            tabProjet: [],
            typeProjet: [],
            selectvalue: "Agriculture",
            activePage: 1,
            itemsCountPerPage:5,
            totalItemsCount: 3,
            pageRangeDisplayed: 5,
        };
    }

    componentDidMount() {
        this.getAll();
    }

    getAll() {
        axios.get("liste_des_donnees").then((response) => {
            var data = response.data;
            this.setState({
                typeProjet: data.typeprojet,
                tabProjet: data.projet.data,
            });
        });
    }

    displayallProject() {
        var data = this.state.tabProjet;
        return data.map((data, index) => {
            return (
                <div
                    className="col-lg-3 col-md-6 d-flex align-items-stretch typeprojet"
                    data-projet-id="3"
                    key={index}
                >
                    <div className="member" data-aos="fade-up">
                        <div className="member-img">
                            <img
                                src={"storage/" + data.fichier}
                                alt=""
                                className="img-fluid"
                            />
                            <div className="social">
                                <a
                                    type="button"
                                    className="btn btn-success"
                                    href={
                                        "https://api.whatsapp.com/send?phone=0024177816737&text=Bonjour,%20je suis%20interessé%20par%20le%20projet :" +
                                        data.libelle
                                    }
                                    target="_blank"
                                    style={{ color: "#fff" }}
                                >
                                    {" "}
                                    <i className="icofont-whatsapp"></i> En
                                    savoir plus
                                </a>
                            </div>
                        </div>
                        <div className="member-info">
                            <h4>{data.typepro}</h4>
                            <span>{data.libelle}</span>
                        </div>
                    </div>
                </div>
            );
        });
    }


    changeSelect(e){
        
        this.setState({
            selectvalue: e.target.value
        })
        var selected = this.state.selectvalue
        setTimeout(() => {
            
            if (selected.length > 0) {
                axios.get('select_type_categorie/'+this.state.selectvalue).then((response)=>{
                    var data = response.data.data
                     this.setState({
                        tabProjet: data
                    })
                })
            }
        }, 100);

    }

    handlePageChange(pageNumber) {
        // console.log(`active page is ${pageNumber}`);
        // this.setState({ activePage: pageNumber });
        axios.get("liste_des_donnees?page=" + pageNumber).then((response) => {
            var data = response.data;
            this.setState({
                tabProjet: data.projet.data,
                itemsCountPerPage : data.projet.per_page,
                totalItemsCount : data.projet.total,
                activePage: data.projet.current_page
            });
        });
    }


    //Message not found
    messageNotFound(){
        return <div className="container">
            <div  className="col-lg-12 col-md-12 d-flex align-items-stretch typeprojet">
            <h3 className="text-center" >Aucun résultat ne correspond à votre recherche ... </h3>
        </div>
        </div>
    }

    paginatedisplay(){
        return <Pagination
        itemClass={"page-item"}
        linkClass={"page-link"}
        activePage={this.state.activePage}
        itemsCountPerPage={this.state.itemsCountPerPage}
        totalItemsCount={this.state.totalItemsCount}
        pageRangeDisplayed={this.state.pageRangeDisplayed}
        onChange={this.handlePageChange.bind(this)}
    />
    }

    render() {
        return (
            <>
                <div className="row">
                    <div className="col-lg-12">
                        <form>
                            <div className="form-row">
                                <div className="col-md-6 form-group">
                                    <label className="label-control">
                                        Sélectionner une catégorie
                                        <font color="red">*</font>
                                    </label>
                                    <select
                                        id="niveau"
                                        className="form-control"
                                        name="langue"
                                        id="selecttype"
                                        required
                                        value={this.state.selectvalue}
                                        onChange={this.changeSelect.bind(this) }
                                    >
                                        <option value="0">
                                            Veuillez sélectionner
                                        </option>
                                        {this.state.typeProjet.map(
                                            (data, index) => {
                                                return (
                                                    <option
                                                        key={index}
                                                        value={data.libelle}
                                                    >
                                                        {data.libelle}
                                                    </option>
                                                );
                                            }
                                        )}
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div className="row text-center" id="projetnonselectionner">
                    {this.state.tabProjet.length > 0 ? this.displayallProject(): this.messageNotFound()}
                </div>

                <div className="d-flex justify-content-center">
                   {this.state.tabProjet.length > 0 ? this.paginatedisplay():''}
                </div>
            </>
        );
    }
}

export default Banque;

if (document.getElementById("project")) {
    ReactDOM.render(<Banque />, document.getElementById("project"));
}
