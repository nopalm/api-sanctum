import React from "react";
import useFetch from "../hooks/useFetch";
import ListProduct from "../components/ListProduct";

const Product = () => {
    const { error, data: products } = useFetch(
        "http://127.0.0.1:8000/api/products"
    );
    return (
        <div>
            {error && <div>{error}</div>}
            {products && <ListProduct products={products} />}
        </div>
    );
};

export default Product;
