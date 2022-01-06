import React, { Component } from "react";
import ReactDOM from "react-dom";
import Axios from "axios";
import Pagination from "react-js-pagination";

class Search extends Component {
    constructor(props) {
        super(props);

        this.state = {
            keysearch: "",
            tabProjet: [],
            tabrecentProjet: [],
            activePage:1,
            itemsCountPerPage:1,
            totalItemsCount:1,
            pageRangeDisplayed:3,
            messageBag:'Aucun résultat ne correspond à votre recherche ...',
        };
    }

    //function to get all

    getAllprojects() {
        axios.get("tous_les_projets").then((response) => {
            var data = response.data;
            this.setState({
                tabProjet: data.operateur.data,
                tabrecentProjet: data.operateur_recent,
            });
        });
    }

    componentDidMount() {
        this.getAllprojects();
    }

    //Afficher les projets
    displayAllProjects() {
        var data = this.state.tabProjet;
        return data.map((data, index) => {
            return (
                <div className="col-lg-4" key={data.id}>
                    <div className="card mb-3">
                        <img
                            className="card-img-top rounded"
                            src={"storage/" + data.fichier}
                            alt="Card image cap"
                            style={{ height: "200px" }}
                        />
                        <div className="card-body">
                            <h5 className="card-title">
                                <i className="icofont-ui-home"></i>
                                <a href={"operateur-info/"+data.id} >{data.raison_sociale}</a>
                                
                            </h5>

                            <div className="entry-meta">
                                <ul>
                                    <li className="d-flex align-items-center">
                                        <i className="icofont-location-pin"></i>
                                        <a href="#">{data.adresse}</a>
                                    </li>
                                    <br />
                                    <li className="d-flex align-items-center">
                                        <i className="icofont-ui-cell-phone"></i>
                                        <a href="#">{data.telephone}</a>
                                    </li>
                                    <br />
                                    <li className="d-flex align-items-center">
                                        <i className="icofont-wall-clock"></i>
                                        <a href="#">
                                            <time dateTime="2020-01-01">
                                                <b>Inscrit le</b> {data.dateins}
                                            </time>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href={"operateur-info/"+data.id} className="offset-2">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
            );
        });
    }

    displayRecentProject() {
        var data = this.state.tabrecentProjet;
        return data.map((data, index) => {
            return (
                <div className="sidebar-item recent-posts" key={index}>
                    <div className="post-item clearfix">
                        <img
                            src={"storage/" + data.fichier}
                            alt=""
                            className="img-fluid"
                        />
                        <h4>
                            <a href={"operateur-info/"+data.id}>
                                {data.raison_sociale} <br />
                                {/* {data.domaine} <br /> */}
                                {data.dateins}
                            </a>
                        {/* <time dateTime="2020-01-01">{data.dateins}</time> */}
                        </h4>
                    </div>
                </div>
            );
        });
    }

    //Recherche des elements onclick input
    searchWord(e) {
        this.setState({ keysearch: e.target.value });

        if (this.state.keysearch.length > 1) {
            axios
                .post("rechercher_un_projet", {
                    seachword: this.state.keysearch,
                })
                .then((response) => {
                    var data = response.data;
                    this.setState({
                        tabProjet: data,
                    });
                });
        } else {
            this.getAllprojects();
        }
    }



    handlePageChange(pageNumber) {
        console.log(`active page is ${pageNumber}`);
        // this.setState({ activePage: pageNumber });
        axios.get("tous_les_projets?page="+pageNumber).then((response) => {
            var data = response.data;
            this.setState({
                tabProjet: data.operateur.data,
                activePage:data.operateur.current_page,
                itemsCountPerPage:data.operateur.per_page,
                totalItemsCount:data.operateur.total,
            });
        });
    }


    messageNotFound(){
        return <h3 className="text-center">{this.state.messageBag}</h3>
    }



    render() {
        return (
            <>
                <section id="blog" className="blog">
                    <div className="container">
                        <div className="row">
                            <div className="col-lg-8 entries">
                                <article
                                    className="entry entry-single"
                                    data-aos="fade-up"
                                >
                                    <div className="row">
                                        {this.state.tabProjet.length > 0 ? this.displayAllProjects() : this.messageNotFound() }
                                        
                                    </div>
                                </article>
                            </div>

                            <div className="col-lg-4">
                                <div className="sidebar" data-aos="fade-left">
                                    <div className="mb-3">
                                        <input
                                            type="text"
                                            className="form-control"
                                            placeholder="Rechercher ..."
                                            value={this.state.keysearch}
                                            onChange={this.searchWord.bind(
                                                this
                                            )}
                                        />
                                    </div>

                                    <h3 className="sidebar-title">
                                        Opérateurs récents
                                    </h3>
                                    {this.displayRecentProject()}
                                </div>
                            </div>
                        </div>
                        <div className="d-flex justify-content-center">
                            <Pagination
                                itemClass={'page-item'}
                                linkClass={'page-link'}
                                activePage={this.state.activePage}
                                itemsCountPerPage={this.state.itemsCountPerPage}
                                totalItemsCount={this.state.totalItemsCount}
                                pageRangeDisplayed={this.state.pageRangeDisplayed}
                                onChange={this.handlePageChange.bind(this)}
                            />
                        </div>
                    </div>
                </section>
            </>
        );
    }
}

export default Search;

if (document.getElementById("search")) {
    ReactDOM.render(<Search />, document.getElementById("search"));
}
