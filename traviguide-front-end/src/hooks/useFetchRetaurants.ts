import useIndex from "./useIndex";
import card from "../entities/card";

const useFetchRetaurants = () => {
  return useIndex<card>(`restaurants`);
};

export default useFetchRetaurants;
