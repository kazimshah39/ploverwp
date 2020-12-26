// Enable / Disable dimensions value linking

var ploverwpLinkDimensionValues = document.querySelector(
  ".ploverwp-link-dimension-values"
);

ploverwpLinkDimensionValues.addEventListener("click", (e) => {
  e.target.classList.toggle("ploverwp-dimensions-connected");

  if (e.target.innerHTML == "Inative") {
    e.target.innerHTML = "Active";
  } else {
    e.target.innerHTML = "Inative";
  }
  

  // Link all dimension values together when (linking button) has 'ploverwp-dimensions-connected' class

  if (
    ploverwpLinkDimensionValues.classList.contains(
      "ploverwp-dimensions-connected"
    )
  ) {
    var ploverwpTopDimension = document.querySelector(
      ".ploverwp-top-dimension"
    );
    var ploverwpRightDimension = document.querySelector(
      ".ploverwp-right-dimension"
    );
    var ploverwpBottomDimension = document.querySelector(
      ".ploverwp-bottom-dimension"
    );
    var ploverwpLeftDimension = document.querySelector(
      ".ploverwp-left-dimension"
    );

    document.querySelectorAll(".ploverwp-dimensions-input").forEach((item) => {
      item.addEventListener("input", (e) => {
        if (
          ploverwpLinkDimensionValues.classList.contains(
            "ploverwp-dimensions-connected"
          )
        ) {
          ploverwpTopDimension.value = e.target.value;
          ploverwpRightDimension.value = e.target.value;
          ploverwpBottomDimension.value = e.target.value;
          ploverwpLeftDimension.value = e.target.value;
        }
      });
    });
  }
});
