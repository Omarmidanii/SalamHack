import { useMutation } from "@tanstack/react-query";
import response from "../entities/response";
import APIClient, { setAuthToken } from "../services/APIClient";

const useUpdate = <T, D>(id: string, endPoint: string) => {
  const apiClient = new APIClient<response<T>>(`/${endPoint}/${id}`);
  setAuthToken();
  return useMutation<response<T>, Error, D>({
    mutationKey: [`update${id}.${endPoint}`],
    mutationFn: (data) => apiClient.put<D>(data),
    onError(error: any) {
      if (error.response && error.response.status === 422) {
      } else if (error.response) {
        console.error("An error occurred:", error.message);
      }
    },
    onSuccess: (vlaues, variables) => {
      console.log(vlaues, variables);
    },
  });
};
export default useUpdate;
