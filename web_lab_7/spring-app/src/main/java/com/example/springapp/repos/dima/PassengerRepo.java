package com.example.springapp.repos.dima;

import com.example.springapp.models.dima.Passenger;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface PassengerRepo extends JpaRepository<Passenger,Long> {

}
