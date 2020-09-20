export const MSJOK = (data, redirectUrl) =>{
    swal("Good job!",
        `${data}`,
        "success");

    location.href = `${redirectUrl}`;
}

export const MSJERROR = (data) =>{
    swal("Ups!",
        `${data}`,
        "error");
}
