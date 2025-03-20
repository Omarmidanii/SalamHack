import card from '../entities/card';
import useIndex from './useIndex';

const useFetchHotels = () => {
  return useIndex<card>(`hotels`);

}

export default useFetchHotels