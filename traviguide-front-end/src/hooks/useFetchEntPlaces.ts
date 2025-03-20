import card from "../entities/card";
import useIndex from "./useIndex";

const useFetchEntPlaces = () => {
  return useIndex<card>(`entertainmentplaces`);
};

export default useFetchEntPlaces;
