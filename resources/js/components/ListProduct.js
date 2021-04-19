import React from "react";

const ListProduct = ({ products }) => {
    console.log({ products });
    return (
        <div className="blog-list">
            {products.map((product) => (
                <div className="blog-preview" key={product.id}>
                    <h2>Name : {product.product_name}</h2>
                    <h4>Desc : {product.product_desc}</h4>
                    <p>Slug : {product.slug} </p>
                    <p>Price : {product.price} </p>
                </div>
            ))}
        </div>
    );
};

export default ListProduct;
